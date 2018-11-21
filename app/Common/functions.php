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
use PHPMailer\PHPMailer;
function sendMail($to, $subject, $content) {
    require __DIR__.'/../PHPMailer/class.PHPMailer.php';
    require __DIR__.'/../PHPMailer/class.smtp.php';
    $mail = new PHPMailer;
    // 装配邮件服务器
    if (true) {
        $mail->IsSMTP();
    }
    $mail->Host = 'smtp.qq.com';  //这里的参数解释见下面的配置信息注释
    $mail->SMTPAuth = true;
    $mail->Username = '1440512123@qq.com';
    $mail->Password = 'klxnnipaptjkidef';
    $mail->SMTPSecure = 'tls';
    $mail->CharSet = 'utf-8';
    // 装配邮件头信息
    $mail->From = '1440512123@qq.com';
    $mail->AddAddress($to);
    $mail->FromName = '李时珍的皮';
    $mail->IsHTML(true);
    // 装配邮件正文信息
    $mail->Subject = $subject;
    $mail->Body = $content;
    // 发送邮件
    //return $mail;
    if (!$mail->Send()) {

        return FALSE;
    } else {

        return TRUE;
    }
}
function getcode(){
    return rand(1000,9999);
}
