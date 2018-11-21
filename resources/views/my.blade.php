<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>个人中心</title>
    <link rel="stylesheet" type="text/css" href="{{ url('my/css/ui.css') }}">
    <link href="{{ url('my/favicon.ico') }}" type="image/x-icon" rel="icon">
    <link href="{{ url('my/iTunesArtwork_402x.png' ) }}" sizes="114x114" rel="apple-touch-icon-precomposed">
</head>
<body>
<div class="aui-container">
    <div class="aui-page">
        <div class="aui-page-my">
            <div class="aui-my-info">
                <div class="aui-my-info-back"></div>
                <a href="javascript:;" class="">
                    <img src="{{$img}}" class="aui-my-avatar">
                </a>
                <div class="aui-mt-location aui-l-red"></div>
            </div>
            <div class="aui-l-content">
                <div class="aui-menu-list aui-menu-list-clear">
                    <ul>
                        <li class="b-line">
                            <a href="my-put.html">
                                <div class="aui-icon"><img src="{{ url('my/images/icon-home/my-in1.png' ) }}"></div>
                                <h3>个人信息</h3>
                                <div class="aui-time"><i class="aui-jump"></i></div>
                            </a>
                        </li>
                        <li class="b-line">
                            <a href="my-read.html">
                                <div class="aui-icon"><img src="{{ url('my/images/icon-home/my-in2.png' ) }}"></div>
                                <h3>我的首页</h3>
                                <div class="aui-time"><i class="aui-jump"></i></div>
                            </a>
                        </li>
                        <li class="b-line">
                            <a href="my-secure.html">
                                <div class="aui-icon"><img src="{{ url('my/images/icon-home/my-in3.png' ) }}"></div>
                                <h3>安全中心</h3>
                                <div class="aui-time"><i class="aui-jump"></i></div>
                            </a>
                        </li>
                        <li class="b-line">
                            <a href="my-up.html">
                                <div class="aui-icon"><img src="{{ url('my/images/icon-home/my-in4.png' ) }}"></div>
                                <h3>设置</h3>
                                <div class="aui-time"><i class="aui-jump"></i></div>
                            </a>
                        </li>
                        <li class="b-line">
                            <a href="my-up.html">
                                <div class="aui-icon"><img src="{{ url('my/images/icon-home/my-in5.png' ) }}"></div>
                                <h3>阅读</h3>
                                <div class="aui-time"><i class="aui-jump"></i></div>
                            </a>
                        </li>
                        <li class="b-line">
                            <a href="my-up.html">
                                <div class="aui-icon"><img src="{{ url('my/images/icon-home/my-in6.png' ) }}"></div>
                                <h3>服务区域</h3>
                                <div class="aui-time"><i class="aui-jump"></i></div>
                            </a>
                        </li>
                        <li class="b-line">
                            <a href="my-up.html">
                                <div class="aui-icon"><img src="{{ url('my/images/icon-home/my-in8.png' ) }}"></div>
                                <h3>推荐给好友</h3>
                                <div class="aui-time"><i class="aui-jump"></i></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>