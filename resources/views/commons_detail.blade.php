<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=0"/>
    <meta http-equiv="pragma" content="no-cache"/>
    <title>文章详情业</title>
    <link rel="stylesheet" type="text/css" href="{{ url('model/detail/css/ipr.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('model/detail/css/lanyon.css') }}"/>
    <script type="text/javascript" src="{{ url('model/detail/js/ipr.js') }}"></script>
    <script type="text/javascript" src="{{ url('model/detail/js/jquery-1.11.2.min.js') }}"></script>
</head>
<body class="body">
<div class="header">
    <div class="logo">法律常识那点事</div>
    <label for="sidebar-checkbox" class="sidebar-toggle"></label>

    <input type="checkbox" id="sidebar-checkbox" class="sidebar-checkbox"/>
    <div id="sidebar" class="sidebar">
        <div class="sidebar-nav"><a href="index.html" class="sidebar-nav-item current">首页</a><a href="category.html" class="sidebar-nav-item">案例报告</a><a href="category.html" class="sidebar-nav-item">深度解读</a><a href="category.html" class="sidebar-nav-item">延伸阅读</a><a href="about.html" class="sidebar-nav-item">关于我们</a><a href="ranking.html" class="sidebar-nav-item">排行榜</a><a href="news.html" class="sidebar-nav-item">投稿</a><a href="feed.html" class="sidebar-nav-item">反馈</a></div>
    </div>
</div>
<div class="ipr-de-cat">
    <h3 class="title">{{$data['title']}}</h3>
    <p class="clear"><span>2015-2-15 12:30</span><span>发布者：{{$data['author']}}</span></p>
    <div class="content">
        <p>{{$data['content']}}</p><br/>
    </div>
</div>
&nbsp;&nbsp;&nbsp;<span>评论区：</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="content" cols="10" rows="20"></textarea><span>发表</span>
<div class="footer">
    <p>上海知识产权研究所版权所有</p>
    <P>邮件：123@gmail.com</P>
    <p>地址：上海市陆家嘴环路</p>
    <p>传真：021-12345678</p>
    <p>电话：021-12345678</p>
</div>
</body>
</html>
<script src="/home/jquery.min.js"></script>
<script type="text/javascript">
    var caution=false
    function setCookie(name,value,expires,path,domain,secure)
    {
        var curCookie=name+"="+escape(value) +
                ((expires)?";expires="+expires.toGMTString() : "") +
                ((path)?"; path=" + path : "") +
                ((domain)? "; domain=" + domain : "") +
                ((secure)?";secure" : "")
        if(!caution||(name + "=" + escape(value)).length <= 4000)
        {
            document.cookie = curCookie
        }
        else if(confirm("Cookie exceeds 4KB and will be cut!"))
        {
            document.cookie = curCookie
        }
    }
    function getCookie(name)
    {
        var prefix = name + "="
        var cookieStartIndex = document.cookie.indexOf(prefix)
        if (cookieStartIndex == -1)
        {
            return null
        }
        var cookieEndIndex=document.cookie.indexOf(";",cookieStartIndex+prefix.length)
        if(cookieEndIndex == -1)
        {
            cookieEndIndex = document.cookie.length
        }
        return unescape(document.cookie.substring(cookieStartIndex+prefix.length,cookieEndIndex))
    }
    function deleteCookie(name, path, domain)
    {
        if(getCookie(name))
        {
            document.cookie = name + "=" +
                    ((path) ? "; path=" + path : "") +
                    ((domain) ? "; domain=" + domain : "") +
                    "; expires=Thu, 01-Jan-70 00:00:01 GMT"
        }
    }
    function fixDate(date)
    {
        var base=new Date(0);
        var skew=base.getTime();
        if(skew>0)
        {
            date.setTime(date.getTime()-skew)
        }
    }
    var now=new Date();
    fixDate(now);
    now.setTime(now.getTime()+365 * 24 * 60 * 60 * 1000);
    var visits = getCookie("counter");
    if(!visits)
    {
        visits=1;
    }
    else
    {
        visits=parseInt(visits)+1;
    }
    setCookie("counter", visits, now);
    $.ajax({
        url:'/insertClick',
        data:'visits='+visits+'&_token='+'{{csrf_token()}}'+'&law_id='+"{{$data['law_id']}}",
        type:'post',
        dataType:'json'
    });
    var content = $('[name=content]').val();
    $.ajax({
        url:'/insertComment',
        data:'visits='+content+'&_token='+'{{csrf_token()}}',
        type:'post',
        dataType:'json',
        success:function(json_info){
            if(json_info.status==100){
                alert(json_info.msg);
                window.location.href='/CommonsDetail';
            }else{
                alert(json_info.msg);
            }
        }
    })
</script>