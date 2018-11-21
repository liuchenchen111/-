<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    @foreach($new_com as $k=>$v)
        <p>{{$k}}<br>
            @foreach($v as $key=>$value)
                <span>标题：{{$value['com_title']}}内容：{{$value['com_content']}}</span><br>
            @endforeach
        </p>
    @endforeach
</body>
</html>
