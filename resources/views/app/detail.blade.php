<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <link rel="stylesheet" type="text/css" href="{{url('/css/weui.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/css/style.css')}}">
    <title>首页</title>
    <script src="//cdn.bootcss.com/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
<div class="p2-title">
    <h1>评分系统</h1>
    <a href="javascript:;" class="weui_btn weui_btn_warn p2-interv-btn">开始干预</a>
    <a href="javascript:;" class="weui_btn weui_btn_warn p2-interv-btn-hidden">结束干预</a>
</div>
<article class="weui_article p2-start">
    <a href="javascript:;" class="weui_btn weui_btn_primary">开始比赛</a>
</article>
<div class="p2-footer">
    <a href="javascript:;" class="weui_btn weui_btn_warn p2-end-btn">结束比赛</a>
    <p class="p2-time">比赛进度<label for="">12:20</label></p>
</div>
<article class="weui_article">
    <div class="weui_cells_title">复选列表项</div>
    <a href="javascript:;"></a>
    <div class="weui_cells weui_cells_checkbox">
        <label class="weui_cell weui_check_label" for="s11">
            <div class="weui_cell_hd">
                <input type="checkbox" class="weui_check" name="checkbox1" id="s11" checked="checked">
                <i class="weui_icon_checked"></i>
            </div>
            <div class="weui_cell_bd weui_cell_primary">
                <p>standard is dealt for u.</p>
            </div>
        </label>
        <label class="weui_cell weui_check_label" for="s12">
            <div class="weui_cell_hd">
                <input type="checkbox" name="checkbox1" class="weui_check" id="s12">
                <i class="weui_icon_checked"></i>
            </div>
            <div class="weui_cell_bd weui_cell_primary">
                <p>standard is dealicient for u.</p>
            </div>
        </label>
    </div>
</article>
<script>
    var group_id = 1;
    function start() {
        $.get('{{url("/match/start/$car_id")}}');
    }
    function end() {
        $.get('{{url("/match/end/$car_id")}}');
    }
    function pre(type) {
        var data = {
            "type": type,
            "car_id":{{$car_id}},
            "group_id": group_id
        };
        $.post('{{route('intervention.store')}}', data, function (data) {
            var i = "a" + (1 - type);
            $('#a' + type).hide();
            $('#a' + i).show();
        });
    }
</script>
</body>
</html>
