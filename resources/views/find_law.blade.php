<script src="{{ url('layui/layui.js') }}" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="{{ url('layui/css/layui.css') }}">
<script language="JavaScript" src="{{ url('jquery-3.2.1.min.js') }}"></script>
<script language="JavaScript" src="{{ URL::asset('/') }}js/win10.js"></script>


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="email=no">
    <meta name="format-detection" content="address=no;">
    <meta name="keywords" content="法律咨询,律师,律师在线咨询">
    <meta name="description" content="法律咨询就到华律网，这是一个最快捷的法律咨询网，为全国各地有法律咨询需求的公众提供免费律师在线咨询服务，法律常识浏览及全国律师和律师事务所查询，律师在线为您解决法律问题">
    <title>法律网</title>
    <link rel="stylesheet" type="text/css" href="{{ url('model/css/index_2f3dc5b.css') }}" />

</head>

<body class="body-box">
<div class="mui-content">

    <div class="ad288a">
        <p class="f24 s-c333 tc" style="color: #fff;">找律师上律师网</p>
        <p class="f12 s-be tc">
            <span>真实</span>
            <span>快速</span>
            <span>免费</span>
        </p>
        <img src="{{ url('model/images/img288a_ad9550f.jpg') }}">
    </div>

    <div class="fuwu-zs bg-fff box-shadow">
        <h2 class="h35-title">7月法律服务指数</h2>
        <ul class="clearfix mt10">
            <li>
                <p>总咨询量</p>
                <p>
                    <span>421248</span> 件
                </p>
            </li>

            <li>
                <p>律师解答量</p>
                <p>
                    <span>638393</span> 个
                </p>

            </li>

            <li>
                <p>活跃律师</p>
                <p>
                    <span>8062</span> 位
                </p>
            </li>
        </ul>
    </div>

    <div id="home_tuijian_lawyer" class="bg-fff box-shadow mt10">
        <nav class="nav-tit-h74 tc">本月推荐律师</nav>

        <ul class="lawyer-card lawyer-card-common mt15">
            @foreach($data as $v)
                <li>
                    <button type="button" class="mui-btn btn-sl btn-gn-line advice-me"
                            data-tel="17319394742" data-name="{{$v['nikename']}}" data-strtime="09:00:00"
                            data-endtime="21:59:59" data-isservicecity="1"
                            data-guid="f04cd7ed-43d2-47b2-8418-cc5e7dd41310"
                            data-photo="http://imgt.66law.cn/upload/t/201412/10/1853434629.jpg"
                            data-helpcount="9" data-location="湖北-武汉" data-responsetime="一天内"
                            data-url="http://m.66law.cn/lawyer/2403297685432/" data-isvip="1">咨询我
                    </button>

                    <a href="javascript:void(0)" class="lr-photo">
                        <img src="http://imgt.66law.cn/upload/t/201412/10/1853434629.jpg" class="img-block">
                        <i class="icon-hualv icon-vip"></i>
                    </a>

                    <p class="lr-name">
                        <a href="javascript:void(0)" class="fl">{{$v['nikename']}}</a>
                    </p>

                    <p class="lr-help mt10 clearfix">
    <span class="fl">
    <i class="icon-hualv icon-310"></i>已帮助<em class="s-gn">4612</em>人
    </span>

    <span>
    <i class="icon-hualv icon-xj1 star-gn"></i>好评<em class="s-gn">{{$v['praise']}}</em>条
    </span>
                    </p>
                </li>
            @endforeach
        </ul>

        <p class="more-btn">
            <a href="javascript:void(0)">查看更多服务律师</a>
        </p>
    </div>
</div>


<div class="popup-bottom pop-ask">
    <div class="pop-photo">
        <a href="javascript:void(0)" class="lr-photo">
            <img src="http://cdn.66law.cn/m-mainweb/ui/images/photo_e2ac1ee.jpg" alt="xx律师头像" class="img-block">
            <i class="icon-hualv icon-vip"></i>
        </a>

        <p class="f12 s-c333 fn-title">你正在咨询**律师</p>

        <dl class="pop-info-list f10">
            <dd><span class="s-cf60 fn-time">1天内</span>响应</dd>
            <dd class="tc">近期帮助 <span class="s-cf60 fn-count">2298</span> 人</dd>
            <dd class="tr fn-local">四川 成都</dd>

        </dl>

    </div>

    <p class="btn-r2 clearfix mt15">
        <a href="javascript:void(0);" class="mui-btn btn-gn fn-tel">
            <i class="icon-hualv mr10">&#xe90a;</i>电话咨询
        </a>

        <a href="/student" class="mui-btn btn-gn">
            <i class="icon-hualv mr10">&#xe924;</i>在线咨询
        </a>
    </p>
</div>

<script type="text/javascript" src="{{ url('model/js/index_85e4bb7.js') }}"></script>
<script type="text/javascript">require(["js/page.index"]);</script>



</body>
</html>
