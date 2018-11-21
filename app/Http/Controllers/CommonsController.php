<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\User;
use Illuminate\Support\Facades\Cookie;

class CommonsController extends Controller
{
    //法律常识
    public function Commons(){
        $db = DB::table('law')->where(['status'=>1])->orderByDesc('clicks')->limit(5)->get();
        $data = json_decode(json_encode($db),true);
        return view( 'commons',['data'=>$data] );
    }
    public function CommonsDetail(){
        $law_id = $_GET['id'];
        $db = DB::table('law')->where(['law_id'=>$law_id,'status'=>1])->first();
        $data = json_decode(json_encode($db),true);
        return view( 'commons_detail' , ['data'=>$data] );
    }
    public function insertClick(){
        $visits = $_POST['visits'];
        $law_id = $_POST['law_id'];
        DB::table('law')->where(['law_id'=>$law_id])->update(['clicks'=>$visits]);
    }
    public function insertComment(){
        $content = $_POST['content'];
        $res = DB::table('comment')->insert(['content'=>$content,'status'=>1]);
        if($res){
            return ['status'=>100,'msg'=>'评论成功'];
        }else{
            return ['status'=>100,'msg'=>'评论失败'];
        }
    }

    //法律常识详情页
    public function CommonsDetail(){
        return view( 'commons_detail' );
    }
}
?>