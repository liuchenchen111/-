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
        $where=[
            'openid'=>$openid
        ];
        $res=DB::table('users')->where($where)->find();
        if($res){
            session('user_id',$res->id);
            return view('my');
        }else{
            return view('law_login');
        }
    }
}
?>