<!DOCTYPE html> 
<html>
<head>
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $("#button1").click(function(){
        alert(1);
      });
      $("#button2").click(function(){
        alert(2);
      });
    });
  </script>


  <script type="text/javascript">
      $.getJSON("<?php echo e(route('car.index')); ?>",function(data){
        // alert("Data: " + data + "\nStatus: " + status);
        console.log(data);
      });

      $.getJSON("<?php echo e(route('car.index')); ?>", function(data) {
        //$("#select_car").html('<option  selected="selected">请选择参赛车辆</option>');//清空info内容
        $.each(data, function(i, item) {
            $("#select_car").append("<option value="+ item.id +">"+ item.name + "</option>");
        });
      });

      $("#button1").click(function(){
        //alert(1);
        var car_id = $(".selector").val();
        alert(car_id);
        location.href='page2'+'/'+car_id;
       
      });
  </script>

 

</head>

<body>
  <?php echo e(csrf_field()); ?>

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
      <a id="button1" class="ui-btn">开始比赛</a>
      <button id="button2" class="ui-btn ui-corner-all">Button</button>
    </div>

    <!-- <div data-role="footer" data-position="fixed">
      <h3>比赛计时 12:09</h3>
      <a class="ui-btn ui-btn-right">30</a>
    </div> -->
  </div>


</body>
</html>