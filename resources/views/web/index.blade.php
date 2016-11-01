<!DOCTYPE html>
<html lang="zh">
  <head>
    <meta charset="UTF-8">
    <title>无人车比赛展示系统</title>
    <link rel="shortcut icon" href="http://api.map.baidu.com/favicon.ico">
    <link href="static/css/track.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="static/css/fontawesome/css/font-awesome.min.css" type="text/css">
    <link href="static/css/jquery.datetimepicker.css" rel="stylesheet" type="text/css">
    <link href="static/css/pagination.css" rel="stylesheet" type="text/css">
    <link href="static/css/swiper.min.css" rel="stylesheet" type="text/css">
    <link href="static/css/clock.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=ABMyPFHzCuKItIEoAG2FZjtt"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/library/CurveLine/1.5/src/CurveLine.min.js"></script>
    <script type="text/javascript" src="static/js/jquery.min.js"></script>
    <script type="text/javascript" src="static/js/jquery.datetimepicker.js"></script>
    <script type="text/javascript" src="static/js/jquery.pagination.js"></script>
    <script type="text/javascript" src="static/js/mousewheel.min.js"></script>
    <script type="text/javascript" src="static/js/baiduTemplate.js"></script>
    <script type="text/javascript" src="static/js/esl/esl.js"></script>
    <script type="text/javascript" src="static/js/clock.js"></script>
    <style>
      body{
        position: relative;
      }
      .title{
        height: 64px;
        left: 0;
        top: 0;
      }
      .title p{
        line-height: 64px;
        font-size: 18px;
      }
      .logo{
        position: absolute;
        left: 320px;
        top: 0;
        width: 160px;
        height: 160px;
        border-radius: 160px;
        background-image: url(./static/images/wrc.png);
        background-repeat: no-repeat;
        background-size: 100% 100%;
        animation: rotate 12s linear infinite;
        -moz-animation: rotate 12s linear infinite;
        -webkit-animation: rotate 12s linear infinite;
        -o-animation: rotate 12s linear infinite;
      }
      .car-info{
        position: absolute;
        left: 322px;
        top: 0;
        z-index: 100;
        width: 160px;
        height: 160px;
        font-size: 16px;
        font-weight: bolder;
      }
      .car-info>p{
        position: absolute;
        width: 84px;
        text-align: center;
        left: 36px;
      }
      .car-info>p:nth-child(1){
        top: 56px;
      }
      .car-info>p:nth-child(2){
        top: 72px;
      }
      .type-ctr{
        top: 64px;
      }
      #track-btn{
        left: 0;
      }
      #track-btn-2{
        left: 150px;
      }
      #data-box{
        top: 97px;
        left: 0;
      }
      #data-box .panel{
        height: 40px !important;
        overflow: hidden;
      }
      .illegal-panel{
        position: absolute;
        background: rgba(0, 0, 0, 0.7);
        top: 137px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, .3);
      }
      .illegal-panel{
        left: 0px;
        width: 300px;
      }
      .illegal-panel>p, .marker-time>p{
        background:rgba(11, 103, 170, 0.5);
        height: 32px;
        line-height: 32px;
        text-align: center;
        font-weight: bold;
        color: #ededed;
      }
      #J_IllegalPanel{
        width: 300px;
        height: 200px;
        position: relative;
        background: rgba(0,0,0,0.7);
      }
      #J_IllegalInfo>div{
        text-align: center;
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
        color: red;
        height: 36px;
        line-height: 36px;
      }
      #track-box{
        height: 40px !important;
        overflow: hidden !important;
      }
      .timeline-ctrl.show{
        left: 50%;
        transform:translateX(-50%);
        -webkit-transform:translateX(-50%);
        -moz-transform:translateX(-50%);
        -o-transform:translateX(-50%);
        right: 0;
      }
      #time_span{
        right: 0;
        left: 77px;
      }
      .zoom-out{
        bottom: 33px;
      }
      .zoom-in{
        bottom: 0px;
      }
      .BMap_noprint.anchorTR{
        bottom: 0px !important;
        top: auto !important;
        right: 50px !important;
      }
      .clock{
        position: absolute;
        top: 15px;
        right: 0;
        width: 376px;
        height: 140px;
      }
      .flip-clock-label{
        display: none;
      }
      .flip-clock-wrapper ul{
        width: 46px;
        height: 65px;
        font-size: 50px;
        line-height: 65px;
        background: yellow;
      }
      .flip-clock-wrapper ul li{
        line-height: 65px;
      }
      .flip-clock-dot.top{
        top: 23px;
      }
      .flip-clock-dot.bottom{
        bottom: 45px;
      }
      .clock-ctr{
        position: absolute;
        right: 47px;
        bottom: 165px;
      }
      .clock-ctr a{
        border-style:solid;
        text-indent:-9999px;
        position: absolute;
      }
      .click-play,.click-pause,.click-reset{
        position: absolute;
        border:14px solid rgba(211, 211, 211, 0.8);
        color: rgba(211, 211, 211, 0.8);
        height: 0;
        width: 0;
        border-radius: 100%;
      }
      .click-play{
        top: 0;
      }
      .click-pause{
        top: 33px;
      }
      .click-reset{
        top: 65px;
      }
      .click-play>.play{
        top: -8px;
        left: -4px;
        border-color:transparent transparent transparent #fff;
        border-width:8px 0 8px 12px;
        width: 0;
        height: 0;
      }
      .click-pause>.pause{
        border-color:transparent #fff;
        border-width:0 4px;
        width: 5px;
        height: 12px;
        left: -7px;
        top: -5px;
      }
      .click-reset>.reset{
        border: 6px solid #fff;
        width: 0;
        height:0;
        top: -6px;
        left: -6px;
      }
      @keyframes rotate
      {
        from {
        transform:rotate(0);
        }
        to {
        transform: rotate(360deg);
        }
      }
      @-moz-keyframes rotate
      {
        from {
        transform: rotate(0);
        -moz-transform: rotate(0);
        }
        to {
        transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        }
      }
      @-webkit-keyframes rotate
      {
        from {
        transform: rotate(0);
        -webkit-transform: rotate(0);
        }
        to {
        transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        }
      }
      @-o-keyframes rotate
      {
        from {
        transform: rotate(0);
        -o-transform: rotate(0);
        }
        to {
        transform: rotate(360deg);
        -o-transform: rotate(360deg);
        }
      }
      .rank-list{
        position: absolute;
        top: 100px;
        right: -310px;
        background-image:url(./static/images/rankbg.png);
        background-size: 100% 100%;
        background-repeat: no-repeat;
        background-position:0 0;
        width: 310px;
        height: 150px;
        color: #fff;
        font-weight: bolder;
      }
      .move-showin{
        animation: movein 3s ease 1 forwards;
        -moz-animation: movein 3s ease 1 forwards;
        -webkit-animation: movein 3s ease 1 forwards;
        -o-animation: movein 3s ease 1 forwards;
      }
      @keyframes movein
      {
        from {
        transform:translateX(0);
        }
        to {
        transform: translateX(-310px);
        }
      }
      @-moz-keyframes movein
      {
        from {
        transform: translateX(0);
        -moz-transform: translateX(0);
        }
        to {
        transform: translateX(-310px);
        -moz-transform: translateX(-310px);
        }
      }
      @-webkit-keyframes movein
      {
        from {
        transform: translateX(0);
        -webkit-transform: translateX(0);
        }
        to {
        transform: translateX(-310px);
        -webkit-transform: translateX(-310px);
        }
      }
      @-o-keyframes movein
      {
        from {
        transform: translateX(0);
        -o-transform: translateX(0);
        }
        to {
        transform: translateX(-310px);
        -o-transform: translateX(-310px);
        }
      }
      .move-showout{
        animation: moveout 4s ease 1 forwards;
        -moz-animation: moveout 4s ease 1 forwards;
        -webkit-animation: moveout 4s ease 1 forwards;
        -o-animation: moveout 4s ease 1 forwards;
      }
      @keyframes moveout
      {
        from {
        transform:translateX(-310px);
        }
        to {
        transform: translateX(0);
        }
      }
      @-moz-keyframes moveout
      {
        from{
        transform: translateX(-310px);
        -moz-transform: translateX(-310px);
        }
        to{
        transform: translateX(0);
        -moz-transform: translateX(0);
        }
      }
      @-webkit-keyframes moveout
      {
        from {
        transform: translateX(-310px);
        -webkit-transform: translateX(-310px);
        }
        to {
        transform: translateX(0px);
        -webkit-transform: translateX(0px);
        }
      }
      @-o-keyframes moveout
      {
        from {
        transform: translateX(-310px);
        -o-transform: translateX(-310px);
        }
        to {
        transform: translateX(0);
        -o-transform: translateX(0);
        }
      }
      table{
        padding: 0;
        border-spacing: 0;
        border-collapse: collapse;
        text-align: center;
      }
      .score-tt,.score-tc{
        width: 240px;
      }
      .score-tc{
        background-color:rgba(255,255,255,0.7);
      }
      .score-tt tr{
        border-bottom: 2px solid #fff;
      }
      #J_MarkerPanel table{
        width: 300px;
      }
      #J_MarkerPanel table tr{
        border-bottom: 1px solid rgba(255,255,255,0.3);
      }
      #J_MarkerPanel table tr td{
        padding: 10px 5px;
      }
      #J_MarkerInfo{
        background: rgba(0,0,0,0.7);
        color: #ededed;
      }
      .chap{
        height: 44px;
        background-repeat: no-repeat;
        background-size: 58% 100%;
        background-position-x:16px;
      }
      .cp1{
        background-image: url('./static/images/gold.png');
      }
      .cp2{
        background-image: url('./static/images/silver.png');
      }
      .cp3{
        background-image: url('./static/images/copper.png');
      }
      .score-tc td{
        vertical-align: middle;
        padding: 1px;
      }
      .rank-title{
        position: absolute;
        height: 30px;
        padding-left: 26px;
        top: 16px;
        right:0px;
        font-size: 18px;
        background-color: rgba(255,255,255,0.7);
        font-weight: bolder;
        color: black;
        background-image:url('./static/images/pt.png');
        background-position: 0 0;
        background-size: 20px 30px;
        background-repeat: no-repeat;
      }
      .rank-cont{
        position: absolute;
        top: 47px;
        right: 0;
        width: 240px;
        color: black;
      }
      .marker-time{
        position: absolute;
        width: 300px;
        top: 369px;
        left: 0;
      }
    </style>
  </head>
  <body>
    <div id="mapContainer"></div>
    <div class="title">
      <p>
        <span class="name"></span><span class="ctrl"><i class="fa fa-chevron-down"></i></span>
      </p>
    </div>
    <div class="logo"></div>
    <div class="car-info" id="J_CarInfo">
      <p>同济大学001车队</p>
    </div>
    <div id="track-btn" class="type-ctr active" data-tag="0">
      <a href="javascript:void(0)">实时监控</a>
    </div>
    <div id="track-btn-2" class="type-ctr" data-tag="1">
      <a href="javascript:void(0)">历史轨迹</a>
    </div>
    <div id="data-box">
        <div class="panel-mask">
          <img src="static/images/loading-1.gif" height="82" width="82">
        </div>
        <div class="panel">
          <div id="tracklist-panel"></div>
          <ul id="tracks-pager-ul" class="pagination"></ul>
        </div>
        <div id="track-box">
          <div class="tracks-panel" id="tracks-panel">
          </div>
          <ul id="tracks-pager-ul-2" class="pagination"></ul>
        </div>
        <div class="tip">
        </div>
    </div>
    <div class="mask">
      <img src="static/images/loading-1.gif" height="82" width="82">
    </div>
    <div class="timeline-ctrl">
      <canvas id="timeline" width="780px" height="60px"></canvas>
      <canvas id="timeCtr" width="16px" height="60px"></canvas>
    </div>
    <div id="time_span"></div>
    <div class="map-ctrl zoom-out" title="地图放大">
      <span><i class="fa fa-plus-circle"></i></span>
    </div>
    <div class="map-ctrl zoom-in" title="地图缩小">
      <span><i class="fa fa-minus-circle"></i></span>
    </div>
    <div class="illegal-panel">
      <p>实时违规详情</p>
      <div class="swiper-container" id="J_IllegalPanel">
        <div class="swiper-wrapper" id="J_IllegalInfo">
          
        </div>
      </div>
    </div>
    <div class="marker-time">
      <p>赛段通过时间</p>
      <div id="J_MarkerPanel">
        <div id="J_MarkerInfo">
          <table>
            <tr><td>赛段1</td><td>10:20</td><td>+20</td><td>3</td></tr>
          </table>
          <table>
            <tr><td>赛段2</td><td>10:20</td><td>+20</td><td>3</td></tr>
          </table>
          <table>
            <tr><td>赛段3</td><td>10:20</td><td>+20</td><td>3</td></tr>
          </table>
          <table>
            <tr><td>赛段4</td><td>10:20</td><td>+20</td><td>3</td></tr>
          </table>
          <table>
            <tr><td>赛段5</td><td>10:20</td><td>+20</td><td>3</td></tr>
          </table>
          <table>
            <tr><td>赛段6</td><td>10:20</td><td>+20</td><td>3</td></tr>
          </table>
        </div>
      </div>
      <p></p>
    </div>
    <div class="clock"></div>
    <div class="clock-ctr">
      <div class="click-play" id="J_Play">
        <a href="javascript:void(0);" class="play"></a>
      </div>
      <div class="click-pause" id="J_Pause">
        <a href="javascript:void(0);" class="pause"></a>
      </div>
      <div class="click-reset" id="J_Reset">
        <a href="javascript:void(0);" class="reset"></a>
      </div>
    </div>
    <div class="rank-list" id="J_RankList">
      <div class="rank-title" id="J_Rt">赛段1排名</div>
      <div class="rank-cont">
        <table class="score-tt">
          <tr>
            <th class="chap cp1"></th><th class="chap cp2"></th><th class="chap cp3"></th></tr>
          <tr>
        </table>
        <table class="score-tc" id="J_ScoreTc">
          <tr>
            <td>同济车001/20:30</td><td>同济车02/20:30</td><td>同济车03/20:30</td>
          </tr>
        </table>
      </div>
    </div>
    <script type="text/html" id="tracklist-tmpl">
      <ul class="tracks-ul">
        <%for(var i=0; i<size; i++) { %>
        <li data-id="<%=trackList[i].entity_name%>" data-name="<%=trackList[i].entity_name%>" data-state="<%=trackList[i].state%>">
          <%if(trackList[i].checked) { %>
          <input type="checkbox" class="cbtest" checked="checked" id="cbtest_<%=trackList[i].entity_name%>" />
          <% } else { %>
          <input type="checkbox" class="cbtest" id="cbtest_<%=trackList[i].entity_name%>" />
          <% } %>
          <label for="cbtest_<%=trackList[i].entity_name%>" class="check-box"></label>
          <span class="state <%=trackList[i].state%>" title="<%=trackList[i].stateTxt%>"></span>
          <span><%=trackList[i].entity_name%></span>
        </li>
        <% } %>
      </ul>
    </script>
    <script type="text/html" id="sel-tracklist-tmpl">
      <ul class="seled-tracks-ul">
        <%for(var i=0; i<size; i++) { %>
        <li class="seled-track" id="seled-track-<%=trackList[i].entity_name%>" data-id="<%=trackList[i].entity_name%>" data-name="<%=trackList[i].entity_name%>">
          <%if(trackList[i].checked) { %>
          <input type="checkbox" class="cbtest" checked="checked" id="cbtest2_<%=trackList[i].entity_name%>" />
          <% } else { %>
          <input type="checkbox" class="cbtest" id="cbtest2_<%=trackList[i].entity_name%>" />
          <% } %>
          <label for="cbtest2_<%=trackList[i].entity_name%>" class="check-box"></label>
          <span class="sel-track-name"><%=trackList[i].entity_name%></span>
          <span class="pro-bar" style="background-color: <%=trackList[i].barBgColor%>"><span class="bar"></span></span>
          <span class="process play" title="回放轨迹" data-id="<%=trackList[i].entity_name%>"><i class="fa fa-play"></i></span>
        </li>
        <% } %>
      </ul>
    </script>
  </body>
  <script type="text/javascript" src="static/js/track/demo.js"></script>
  <script type="text/javascript" src="static/js/track/swiper.min.js"></script>
  <script type="text/javascript" src="static/js/demoTrack.js"></script>
  <script type="text/javascript" src="static/js/index.js"></script>
</html>