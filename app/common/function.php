<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

/**
 * 用户勋章等级查询
 * @return 0代表没有勋章，1代表铜，2代表银，3代表金，4代表钻石
 */
function userLevel($openid)
{
    $user_medal = DB::table('medal')->where('openid', $openid)->first();

    if (empty($user_medal)) {
        return 0;
    }
    return $user_medal->medal;

}

/**
 * 用户勋章等级计算（充值时调用）
 * @openid 用户openid
 */
function payUserLevel($openid)
{
    //查询用户充值记录
    $user_money = DB::table('money')->where('openid', $openid)->get();

    //判断充值时间是否超过七天
    $money = [];
    foreach ($user_money as $k => $v) {
        if ($v['mtime'] <= time()) {
            $money[] = $v;
        }
    }

    //计算充值金额
    $m = 0;
    foreach ($money as $k => $v) {
        $m += intval($v['money']);
    }

    //判断勋章等级
    if ($m > 0 && $m < 20) {
        $medal = 1;
    }

    if ($m >= 20 && $m < 30) {
        $medal = 2;
    }

    if ($m >= 30 && $m < 50) {
        $medal = 3;
    }

    if ($m >= 50) {
        $medal = 4;
    }

    //查询用户是否已有勋章
    $user_medal = DB::table('medal')->where('openid', $openid)->first();

    //如果用户没有勋章，则直接添加
    if (empty($user_medal)) {
        $data = [
            'openid' => $openid,
            'medal' => $medal,
            'ctime' => time(),
            'dtime' => time() + 60 * 60 * 24 * 7
        ];
        DB::table('medal')->insert($data);
        return true;
    }

    //如果用户有勋章，则走这里
    if ($user_medal->medal > $medal) {
        //不更新勋章
        return true;
    }

    if ($user_medal->medal == $medal) {
        //增加勋章时长
        $data = [
            'dtime' => $user_medal->dtime + 60 * 60 * 24 * 7
        ];
        DB::table('medal')->where('openid', $openid)->update($data);
    }

    if ($user_medal->medal < $medal) {
        //替换勋章，不累计时长
        $data = [
            'openid' => $openid,
            'medal' => $medal,
            'ctime' => time(),
            'dtime' => time() + 60 * 60 * 24 * 7
        ];
        DB::table('medal')->insert($data);
    }
}