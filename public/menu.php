<?php
ini_set('display_errors','On');

error_reporting(E_ALL);

$db=new mysqli('127.0.0.1','root','root','cms');

$sql = "select * from `access_token` order by `ctime` desc limit 1";

$res = $db -> query($sql);

$arr = $res -> fetch_all(1);

$url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$arr[0]['token'];

$str="{
    \"button\": [
    {
               \"type\":\"view\",
               \"name\":\"实时热点\",
               \"url\":\"http://www.baidu.com\"
            },
        {
            \"name\": \"法律服务\",
            \"sub_button\": [
                {
                    \"type\": \"view\",
                    \"name\": \"法律常识\",
                    \"url\":\"http://chenhao.6lll6.cn/commons\"
                },
                {
                    \"type\": \"view\",
                    \"name\": \"找律师\",
                    \"url\":\"http://chenhao.6lll6.cn/find_law\"
                }
            ]
        },

        {
            \"name\": \"个人中心\",
            \"sub_button\": [
                {
                    \"type\": \"view\",
                    \"name\": \"我的\",
                    \"url\":\"http://chenhao.6lll6.cn/mys\"
                },
                {
                    \"type\": \"view\",
                    \"name\": \"用户悬赏问题\",
                    \"url\":\"http://chenhao.6lll6.cn/mys\"
                },
                {
                    \"type\": \"view\",
                    \"name\": \"律师注册\",
                    \"url\":\"http://chenhao.6lll6.cn/law_login\"
                }
            ]
        }

    ]
}";
echo $json = curl($url , $str);
function curl($url , $str){
    $ch = curl_init();
    $headers = [
        //"Content-Type:text/html;charset=UTF-8", "Connection: Keep-Alive"
    ];
    $params[CURLOPT_HTTPHEADER] = $headers; //自定义header
    $params[CURLOPT_URL] = $url;    //请求url地址
    $params[CURLOPT_HEADER] = true; //是否返回响应头信息
    $params[CURLOPT_RETURNTRANSFER] = true; //是否将结果返回
    $params[CURLOPT_FOLLOWLOCATION] = true; //是否重定向
    $params[CURLOPT_POST] = true;
    $params[CURLOPT_POSTFIELDS] = $str;
    $params[CURLOPT_SSL_VERIFYPEER] = false;
    $params[CURLOPT_SSL_VERIFYHOST] = false;
    curl_setopt_array($ch, $params); //传入curl参数
    $content = curl_exec($ch); //执行
    return $content; //输出登录结果
}
?>

