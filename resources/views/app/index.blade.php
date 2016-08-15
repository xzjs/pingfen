<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"/>
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            $.getJSON("{{ route('car.index') }}", function (data) {
                // alert("Data: " + data + "\nStatus: " + status);
                console.log(data);
            });

            $.getJSON("{{route('car.index')}}", function (data) {
                $("#select_car").html("");//清空info内容
                $.each(data.id, function (i, item) {
                    $("#select_car").append(
                            "<option value=" + item.id + ">" + item.name + "</option>");
                });
            });


        });
    </script>

</head>

<body>
{{ csrf_field() }}
<!-- Page: 输入考试车辆信息  -->
<div id="page1" data-role="page">
    <div data-role="header" data-position="fixed">
        <h3>智能车评分系统</h3>
    </div>
    <div role="main" class="ui-content">
        <form>
            <div class="ui-field-contain">
                    <label for="select-native-1">请选择参赛车辆:</label>
                    <select name="select_car" id="select_car">
                            
                    <option value="1">编号1</option>
                            
                        </select>
            </div>
        </form>
        <a href="#page2" class="ui-btn">开始比赛</a>
    </div>
    <!-- <div data-role="footer" data-position="fixed">
      <h3>比赛计时 12:09</h3>
      <a class="ui-btn ui-btn-right">30</a>
    </div> -->
</div>

<!-- Page: exam  -->
<div id="page2" data-role="page">
    <div data-role="header" data-position="fixed">
        <h3>评分选项</h3>
        <a id="intervention" class="ui-btn ui-btn-right">人工干预</a>
    </div>
    <div role="main" class="ui-content">

        <a class="ui-btn">开始比赛</a>
        <fieldset data-role="controlgroup" data-type="vertical">
            <legend>城市1 任务启动: 20</legend>
            <input id="11" name="11" type="checkbox">
            <label for="11">是否识别绿灯起步 20</label>
            <input id="12" name="12" type="checkbox">
            <label for="12">是否无碰撞行驶</label>
        </fieldset>

        <div data-role="collapsible" data-collapsed="false">
                <h4>Heading</h4>
                
            <ul data-role="listview">
                        
                <li><a href="#">List item 1</a></li>
                        
                <li><a href="#">List item 2</a></li>
                        
                <li><a href="#">List item 3</a></li>
                    
            </ul>
        </div>

        <a class="ui-btn">比赛结束</a>
    </div>
    <div data-role="footer" data-position="fixed">
        <h3>比赛计时 12:09</h3>
        <a class="ui-btn ui-btn-right">30</a>
    </div>
</div>

</body>
</html>