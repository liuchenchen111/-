<?php
function message($error,$status=2,$code=5){
    $arr=[
        'status'=>$status,
        'error'=>$error,
        'code'=>$code,
    ];
    return json_encode($arr);
}

function success($error,$status=1,$code=1){
    $arr=[
        'status'=>$status,
        'error'=>$error,
        'code'=>$code,
    ];
    return json_encode($arr);
}

function getcode(){
    return rand(1000,9999);
}
