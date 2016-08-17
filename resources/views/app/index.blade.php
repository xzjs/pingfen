<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <link rel="stylesheet" type="text/css" href="css/weui.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="//cdn.bootcss.com/jquery/3.1.0/jquery.min.js"></script>
    <title>首页</title>
</head>
<body>
<article class="weui_article p1-wrapper">
    <div class="p1-slec">
        <select name="" id="" class="p1-form">
            <option value="0">请选择车辆</option>
            @foreach($cars as $car)
                <option value="{{$car->id}}">{{$car->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="p1-go" id="J_Go">
        <a href="javascript:;" onclick="get_carid()" class="weui_btn weui_btn_primary">开始比赛</a>
    </div>
</article>

<script>

    function get_carid() {
        var car_id = $('select').val();
        window.location.href = "app/detail/" + car_id;
    }
</script>
</body>
</html>