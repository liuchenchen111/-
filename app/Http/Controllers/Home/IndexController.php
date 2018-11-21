<?php
namespace App\Http\Controllers\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{   public function index(){
    $data = print_r($_GET,true);
	file_put_contents('./test.txt',$data,FILE_APPEND);
//	print_r($data);
	$arr = [
		'token' => '123wqeasd',
		'timestamp' => $_GET['timestamp'],
		'nonce' => $_GET['nonce']
	];
//	print_r($arr);
	//根据值排序
	sort($arr);
	//把值拼接成一个字符串
	$str = '';
	foreach($arr as $k=>$v){
		$str .= $v ;
	}
	$sign = sha1($str);
//	echo $sign.'<br>';
//	echo $_GET['signature'];
	if($sign == $_GET['signature']){
		echo $_GET['echostr'];
	}else{
		echo '签名失败';
	}
    }

}
