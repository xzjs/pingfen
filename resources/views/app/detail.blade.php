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
    <a id="a0" href="javascript:;" class="weui_btn weui_btn_warn p2-interv-btn" onclick="pre(0)">开始干预</a>
    <a id="a1" href="javascript:;" class="weui_btn weui_btn_warn p2-interv-btn-hidden" onclick="pre(1)">结束干预</a>
</div>
<article class="p2-start">
    <a id="match_start" href="javascript:;" class="weui_btn weui_btn_primary" onclick="start()">开始比赛</a>
    <div class="p2-on">
        <p>比赛时间:&nbsp;&nbsp;<label id="match_time">12:10</label></p>
        <a href="javascript:;" class="weui_btn weui_btn_warn p2-interv-btn" onclick="end()">结束</a>
    </div>
</article>
<article class="weui_article" style="margin-top: 70px;">
    {{--<div class="weui_cells_title">复选列表项</div>--}}
    @foreach($groups as $group)
        <a href="javascript:;" class="weui_btn weui_btn_sign"
           onclick="set_group_id(event,'{{$group->id}}')">开始{{$group->name}}</a>
        <div class="weui_cells weui_cells_checkbox">
            @foreach($group->missions as $mission)
                <label class="weui_cell weui_check_label" for="s{{$mission->id}}">
                    <div class="weui_cell_hd">
                        <input type="checkbox" class="weui_check" name="checkbox1" id="s{{$mission->id}}"
                               onclick="exam('{{$car_id}}','{{$group->id}}','{{$mission->id}}')">
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
    var group_id = 0;
    var c = 0;
    var t;
    var token = $('input[type=hidden]').val();

    /**
     * 设置group_id
     * @param e 点击的元素
     * @param g_id group_id
     */
    function set_group_id(e,g_id) {
        group_id = g_id;
//        console.log(e);
        alert(e.target.innerHTML);
    }

    /**
     * 开始比赛
     */
    function start() {
        $.get('{{url("/match/start/$car_id")}}', function (r) {
            if (r == 1) {
                $(".p2-on").show();
                $("#match_start").hide();
                timedCount();
            } else {
                alert(r);
            }
        });
    }

    /**
     * 结束比赛
     */
    function end() {
        $.get('{{url("/match/end/$car_id")}}', function (r) {
            if (r == 1) {
                window.location.href = "{{url('/app/end')}}";
            } else {
                alert(r);
            }
        });
    }

    /**
     * 人工干预
     * @param type 0开始人工干预 1结束人工干预
     */
    function pre(type) {
        if (group_id == 0) {
            alert("请先点击开始的考点");
            return;
        }
        var data = {
            "type": type,
            "car_id":{{$car_id}},
            "group_id": group_id,
            "_token":token
        };
        $.post('{{route('intervention.store')}}', data, function (r) {
            if (r == 1) {
                var i = 1 - type;
                $('#a' + type).hide();
                $('#a' + i).show();
            } else {
                alert(r);
            }
        });
    }

    /**
     * 评分
     * @param car_id 车辆id
     * @param group_id 考点id
     * @param mission_id 任务id
     */
    function exam(car_id, group_id, mission_id) {
        var data = {
            "car_id": car_id,
            "group_id": group_id,
            "mission_id": mission_id,
            "_token":token
        };
        $.post('{{route('exam.store')}}', data, function (a) {
            if (a != 1) {
                alert(a);
            }
        });
    }

    function timedCount() {
        $('#match_time').html(c);
        c = c + 1;
        t = setTimeout("timedCount()", 1000);
    }
</script>
</body>
</html>
