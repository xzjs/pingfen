<!DOCTYPE html> 
<html>
<head>
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
  <script type="text/javascript">
  $("input[id*='m']").click(function(){
        alert($(this).attr("id"));
        // var car_id = $("selected").val();
        // alert('c:' + car_id);
        var mission_id = $(this).attr("id");
        // alert('m:' + mission_id);
        // $.post
      });

  </script>
  <script type="text/javascript">
      $.getJSON("{{ route('car.index') }}",function(data){
        // alert("Data: " + data + "\nStatus: " + status);
        console.log(data);
      });

      $.getJSON("{{route('car.index')}}", function(data) {
        //$("#select_car").html('<option  selected="selected">请选择参赛车辆</option>');//清空info内容
        $.each(data, function(i, item) {
            $("#select_car").append("<option value="+ item.id +">"+ item.name + "</option>");
        });
      });

      $.getJSON("{{ route('group.index') }}",function(data){
        // alert("Data: " + data + "\nStatus: " + status);
        console.log(data);
      });

      // collapsible
      // $.getJSON("{{route('group.index')}}", function(data) {
      //   //$("#select_car").html('<option  selected="selected">请选择参赛车辆</option>');//清空info内容
      //   $.each(data, function(i, item) {
      //       //$("#select_car").append("<option value="+ item.id +">"+ item.name + "</option>");
      //       //$("#startexam").append(html);
      //       var legend = '<form id="exam' +item.id
      //                + '"><fieldset data-role="collapsible"><legend>任务：'
      //                + item.name
      //                + '</legend><div data-role="controlgroup">';            
      //       $.each(item.missions, function(j, mitem) {
      //           var checkbox = '<input type="checkbox" name="m'+mitem.id+'point'+mitem.point+'" id="m'+ mitem.id +'"><label for="m'+mitem.id+'point'+mitem.point+'">'+mitem.name+'</label>';
      //           legend = legend + checkbox;
      //       });
      //       var html = legend + '</div></fieldset></form>';
      //       $("#pageexam").append(html);
      //       if(i==0){
      //         return false;
      //       }
      //   });
      // });


      $.getJSON("{{route('group.index')}}", function(data) {
        //$("#select_car").html('<option  selected="selected">请选择参赛车辆</option>');//清空info内容
        $.each(data, function(i, item) {
            //$("#select_car").append("<option value="+ item.id +">"+ item.name + "</option>");
            //$("#startexam").append(html);
            var legend = '<fieldset data-role="controlgroup" data-type="vertical"><legend>任务123：'+item.name+'</legend>';          
            $.each(item.missions, function(j, mitem) {
                //var checkbox = '<input type="checkbox" name="m'+mitem.id+'point'+mitem.point+'" id="m'+ mitem.id +'"><label for="m'+mitem.id+'point'+mitem.point+'">'+mitem.name+'</label>';
                var checkbox = '<input id="'+ mitem.id +'" name="m'+mitem.id+'point'+mitem.point+'" type="checkbox"><label for="m'+mitem.id+'point'+mitem.point+'">'+mitem.name+'</label>'
                legend = legend + checkbox;
            });
            var html = legend + '</fieldset>';
            $("#pageexam").append(html);
            // if(i==0){
            //   return false;
            // }
        });
      });
       
      
  </script>

 

</head>

<body>
   {{ csrf_field() }}
  <!-- Page: input aicar number  -->
  <div id="page1" data-role="page">
    <div data-role="header" data-position="fixed">
      <h3>智能车评分系统</h3>
    </div>
    <div role="main" class="ui-content">
      <form>
      <div class="ui-field-contain">
          <!-- <label for="select-native-1">请选择参赛车辆:</label> -->
          <select name="select_car" id="select_car">
              <option  selected="selected">请选择参赛车辆</option>
              <!-- <option value="1">编号1</option> -->
              
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
    <div role="main" class="ui-content" id="pageexam">

      <a id="startexam" class="ui-btn">开始比赛</a>

<!--       <fieldset data-role="controlgroup" data-type="vertical">
        <legend>城市1 任务启动: 20</legend>
        <input id="11" name="11" type="checkbox">
        <label for="11">是否识别绿灯起步 20</label>
        <input id="12" name="12" type="checkbox">
        <label for="12">是否无碰撞行驶</label>
      </fieldset> -->
      
<!--       <form>
          <fieldset data-role="collapsible">
              <legend>Legend</legend>
              <div data-role="controlgroup">
                  <input type="checkbox" name="checkbox-1-a" id="checkbox-1-a">
                  <label for="checkbox-1-a">One</label>
                  <input type="checkbox" name="checkbox-2-a" id="checkbox-2-a">
                  <label for="checkbox-2-a">Two</label>
                  <input type="checkbox" name="checkbox-3-a" id="checkbox-3-a">
                  <label for="checkbox-3-a">Three</label>
              </div>
          </fieldset>
      </form> -->


    </div>
    <div data-role="footer" data-position="fixed">
      <h3>比赛计时 12:09</h3>
      <a class="ui-btn ui-btn-right">30</a>
    </div>
  </div>

</body>
</html>