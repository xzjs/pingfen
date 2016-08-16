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
<article class="p2-start">
    <a href="javascript:;" class="weui_btn weui_btn_primary">开始比赛</a>
    <div class="p2-on">
        <p>比赛时间:&nbsp;&nbsp;<label>12:10</label></p>
        <a href="javascript:;" class="weui_btn weui_btn_warn p2-interv-btn">结束</a>
    </div>
</article>
<article class="weui_article" style="margin-top: 70px;">
    {{--<div class="weui_cells_title">复选列表项</div>--}}
    @foreach($groups as $group)
        <a href="javascript:;" class="weui_btn_mini" onclick="get_group_id('{{$group->id}}')">开始{{$group->name}}</a>
        <div class="weui_cells weui_cells_checkbox">
            @foreach($group->missions as $mission)
                <label class="weui_cell weui_check_label" for="s11"
                       onclick="exam('{{$car_id}}','{{$group->id}}','{{$mission->id}}')">
                    <div class="weui_cell_hd">
                        <input type="checkbox" class="weui_check" name="checkbox1" id="s11">
                        <i class="weui_icon_checked"></i>
                    </div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>{{$mission->name}}</p>
                    </div>
                </label>
            @endforeach
        </div>
    @endforeach
</article>
{{csrf_field()}}
<script>
    var group_id = 1;
    function get_group_id(g_id) {
        group_id = g_id;
    }
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
    function exam(car_id, group_id, mission_id) {
        var data = {
            "car_id": car_id,
            "group_id": group_id,
            "mission_id": mission_id,
            "_token":$('input[type=hidden]').value
        };
        $.post('{{route('exam.store')}}', data, function (a) {
            if (a != 1) {
                alert(a);
            }
        });
    }
</script>
</body>
</html>
