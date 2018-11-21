<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cookie;

class MyController extends Controller
{
    public function My(){
        $obj=new \Memcache();
        $obj->connect('127.0.0.1',11211);
        $openid=$obj->get('openid');
        $access_token=$obj->get('access_token');
        //dd($openid);
        $where=[
            'openid'=>$openid
        ];
        $res=DB::table('users')->where($where)->first();

        if($res!=null){
            $url="https://api.weixin.qq.com/cgi-bin/user/info?access_token={$access_token}&openid={$openid}&lang=zh_CN";
            $data=json_decode($this->curlRequest($url),true);


            $img=$data['headimgurl'];
            session('user_id',$res->id);
            return view('my')->with(['img'=>$img]);
        }else{
            return view('law_login');
        }
    }
    public function curlRequest($url,$data = ''){
        $ch = curl_init();
        $params[CURLOPT_URL] = $url;    //请求url地址
        $params[CURLOPT_HEADER] = false; //是否返回响应头信息
        $params[CURLOPT_RETURNTRANSFER] = true; //是否将结果返回
        $params[CURLOPT_FOLLOWLOCATION] = true; //是否重定向
        $params[CURLOPT_TIMEOUT] = 30; //超时时间
        if(!empty($data)){
            $params[CURLOPT_POST] = true;
            $params[CURLOPT_POSTFIELDS] = $data;
        }
        $params[CURLOPT_SSL_VERIFYPEER] = false;//请求https时设置,还有其他解决方案
        $params[CURLOPT_SSL_VERIFYHOST] = false;//请求https时,其他方案查看其他博文
        curl_setopt_array($ch, $params); //传入curl参数
        $content = curl_exec($ch); //执行
        curl_close($ch); //关闭连接
        return $content;
    }
}
?>