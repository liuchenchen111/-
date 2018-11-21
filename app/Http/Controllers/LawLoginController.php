<?php

namespace App\Http\Controllers;
use App\Model\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cookie;

class LawLoginController extends Controller
{
    public function LawLogin(){
        return view( 'law_login' );
    }
    public function LawLogin_do(Request $request){
        $obj=new \Memcache();
        $obj->connect('127.0.0.1',11211);
        $openid=$obj->get('openid');

        $data=$request->input();
        $arr=[
            'openid'=>$openid,
            'nikename'=>$data['nickname'],
            'pwd'=>md5($data['pwd']),
            'ctime'=>time(),
            'type'=>1,
            'status'=>0
        ];
        $res=DB::table('users')->insert($arr);
        if($res){
            return success('注册成功');
        }else{
            return message('注册失败');
        }
    }
    public function LawRegister(){
        return view( 'register' );
    }
    public function LawRegister_do(Request $request){
        $obj=new \Memcache();
        $obj->connect('127.0.0.1',11211);
        $openid=$obj->get('openid');

        $data=$request->input();
        $arr=[
            'openid'=>$openid,
            'id_number'=>$data['num'],
            'nikename'=>$data['nickname'],
            'pwd'=>md5($data['pwd']),
            'ctime'=>time(),
            'type'=>2,
            'status'=>0
        ];
        $res=DB::table('users')->insert($arr);
        if($res){
            return success('注册成功');
        }else{
            return message('注册失败');
        }
    }
}
?>