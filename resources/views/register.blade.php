<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>注册</title>
    <meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width">
    <meta name="viewport" media="(device-height: 568px)" content="initial-scale=1.0,user-scalable=no,maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" href="{{url('lawlogin/css/gongyong.css')}}">

    <script src="{{URL::asset('layui/layui.js')}}"></script>
    <script src="{{URL::asset('jquery-3.2.1.min.js')}}"></script>
</head>

<body>

<div class="head">
    <span class="head_lf"><a href="javascript:;" onclick="fun1()">返回</a></span>

    律师注册

    <span class="head_rg"><a href="login.html">登录</a></span>
</div>

<div class="zhuce">
    <div class="text">
        <span>昵 称</span>
        <input type="text" placeholder="请输入昵称" id="a" class="input">
    </div>
    <div class="text">
        <span>律师证号</span>
        <input type="text" placeholder="请输入律师证号" id="d" class="input">
    </div>
    <div class="text">
        <span>密 码</span>
        <input type="text" placeholder="请输入密码" id="b" class="input">
    </div>
    <div class="text">
        <span>确认密码</span>
        <input type="text" placeholder="请输入确认密码" id="c" class="input">
    </div>
    <div class="tip"><a href="#"><input type="checkbox" checked="checked">同意注册条款</a></div>
    <div class="btndl"><input type="submit" value="注 册" id="btn"></div>
</div>

</body>
</html>
<script>
    $(function(){
        layui.use(['form','upload','layer'], function(){
            var form = layui.form;
            var upload = layui.upload;
            var layer = layui.layer;
        })
        function fun1(){
            history.go(-1);
        }

        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' }
        });


        $('#btn').click(function(){
            var nikename=$('#a').val();
            var pwd=$('#b').val();
            var pwd2=$('#c').val();
            var num=$('#d').val();
            if(pwd!=pwd2){
                layer.msg('密码和确认密码要一致',{icon:2})
            }

            $.post("{{ URL::asset('law_register_do') }}",{nickname:nikename,pwd:pwd,num:num},function(data){
                if(data.status==1){
                    layer.msg(data.error,{icon:1});
                }else{
                    layer.msg(data.error,{icon:2});
                }
            },'json')
        })
    })

</script>