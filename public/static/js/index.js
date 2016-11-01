// 地图初始化
var map = new BMap.Map("mapContainer", {
  // 关闭底图可点功能
  enableMapClick: false
});
var mapCenter = new BMap.Point(120.788468, 31.594927);
map.centerAndZoom(mapCenter, 17);
// 设置酷黑个性化地图
map.setMapStyle(
  {
    styleJson: [{
      featureType: "land",
      elementType: "geometry",
      stylers: {
        color: "#212121"
      }
  }, {
    featureType: "building",
    elementType: "geometry",
    stylers: {
      color: "#2b2b2b"
    }
  }, {
    featureType: "highway",
    elementType: "all",
    stylers: {
      lightness: -42,
      saturation: -91
    }
  }, {
    featureType: "arterial",
    elementType: "geometry",
    stylers: {
      lightness: -77,
      saturation: -94
    }
  }, {
    featureType: "green",
    elementType: "geometry",
    stylers: {
      color: "#1b1b1b"
    }
  }, {
    featureType: "water",
    elementType: "geometry",
    stylers: {
      color: "#181818"
    }
  }, {
    featureType: "subway",
    elementType: "geometry.stroke",
    stylers: {
      color: "#181818"
    }
  }, {
    featureType: "railway",
    elementType: "geometry",
    stylers: {
      lightness: -52,
      visibility: "off"
    }
  }, {
    featureType: "railway",
    elementType: "all",
    stylers: {
      visibility: "off"
    }
  }, {
    featureType: "subway",
    elementType: "all",
    stylers: {
      visibility: "off"
    }
  }, {
    featureType: "all",
    elementType: "labels.text.stroke",
    stylers: {
      color: "#313131"
    }
  }, {
    featureType: "all",
    elementType: "labels.text.fill",
    stylers: {
      color: "#8b8787"
    }
  }, {
    featureType: "manmade",
    elementType: "geometry",
    stylers: {
      color: "#1b1b1b"
    }
  }, {
    featureType: "local",
    elementType: "geometry",
    stylers: {
      lightness: -75,
      saturation: -91
    }
  }, {
    featureType: "subway",
    elementType: "geometry",
    stylers: {
      lightness: -65
    }
  }, {
    featureType: "railway",
    elementType: "all",
    stylers: {
      lightness: -40
    }
  }, {
    featureType: "poi",
    elementType: "all",
    stylers: {
      visibility: "off"
    }
  }, {
    featureType: "highway",
    elementType: "labels.icon",
    stylers: {
      visibility: "off"
    }
  }]
});
var mapType = new BMap.MapTypeControl({
  mapTypes: [BMAP_NORMAL_MAP, BMAP_HYBRID_MAP]
});
map.addControl(mapType); //2D图，卫星图
map.setMaxZoom(18);

// 绘制点
function createMarker(pointArr, style){
  for (var i in pointArr) {
    (function() {
      var p = new BMap.Point((pointArr[i])[0], (pointArr[i])[1]);
      var m = new BMap.Marker(p, {
        icon: new BMap.Icon(style.url, new BMap.Size(style.width, style.height))
      });
      map.addOverlay(m);
    })(i)
  }
}

//centre:椭圆中心点,X:横向经度,Y:纵向纬度
function add_oval(centre, x, y) {
  var assemble = new Array();
  var angle;
  var dot;
  var tangent = x / y;
  for (i = 0; i < 36; i++) {
    angle = (2 * Math.PI / 36) * i;
    dot = new BMap.Point(centre.lng + Math.sin(angle) * y * tangent, centre.lat + Math.cos(angle) * y);
    assemble.push(dot);
  }
  return assemble;
}
var NoGPSoval = new BMap.Polygon(add_oval(new BMap.Point(120.789936, 31.594677), 0.0005, 0.0005), {
  strokeColor: "red",
  strokeWeight: 2,
  strokeOpacity: 0.3
});
map.addOverlay(NoGPSoval);

var originPt = [
  [120.784417, 31.59648]
];
var midPt = [
  [120.786743, 31.595227],
  [120.794379, 31.594489]
];
var lightPt = [
  [120.785535, 31.596765],
  [120.787549, 31.597557],
  [120.788719, 31.596138]
];
var awarepeopPt = [
  [120.788272, 31.597549],
  [120.788668, 31.595304]
];
var barrierPt = [
  [120.785939, 31.594754]
];
var originPtStyle = {
  url: './static/images/stf.png',
  width: 110,
  height: 107
};
var midPtStyle = {
  url: './static/images/mf.png',
  width: 70,
  height: 66
};
var turnPtStyle = {
  url: './static/images/uturn_1.png',
  width: 66,
  height: 66
};
var lightPtStyle = {
  url: './static/images/light_1.png',
  width: 56,
  height: 23
};
var awarepeopPtStyle = {
  url: './static/images/people_1.png',
  width: 66,
  height: 55
};
var barrierPtStyle = {
  url: './static/images/barrier_1.png',
  width: 66,
  height: 55
};
createMarker(originPt, originPtStyle);
createMarker(midPt, midPtStyle);
createMarker(lightPt, lightPtStyle);
createMarker([
  [120.783505, 31.595611]
], turnPtStyle);
createMarker(awarepeopPt, awarepeopPtStyle);
createMarker(barrierPt, barrierPtStyle);

$(function() {
  //展示时钟
  var clock = $('.clock').FlipClock({
    clockFace: 'HourlyCounter',
    autoStart: false
  });

  $("#J_Play").click(function() {
    clock.start();
  });
  // @lj---此处需要修改
  $("#J_Pause").click(function(){
    // clock.stop();
    $('#J_RankList').addClass('move-showin');
    setTimeout(function() {
      $('#J_RankList').removeClass('move-showin').addClass('move-showout');
    }, 40000);
  });

  $("#J_Reset").click(function() {
    clock.reset();
  });
  var myIllegalSwiper = new Swiper('#J_IllegalPanel', {
        autoplay: 2000, //可选选项，自动滑动
        speed: 2000,
        loop: true,
        slidesPerView: 1,
        direction: 'vertical'
  })
   // document.querySelector('.append-2-slides').addEventListener('click', function (e) {
   //      e.preventDefault();
   //      swiper.appendSlide([
   //          '<div class="swiper-slide">Slide ' + (++appendNumber) + '</div>',
   //          '<div class="swiper-slide">Slide ' + (++appendNumber) + '</div>'
   //      ]);
   //  });
  // 动态添加举例
  // var lj=0,ht='',contInterval;
  // if(lj>8){
  //   clearInterval(contInterval);
  // }else{
  //   contInterval=setInterval(function(){
  //     ht='<div class="swiper-slide">这是第'+(lj+1)+'条信息</div>';
  //     lj++;
  //     myIllegalSwiper.appendSlide(ht);
  //   },1000)
  // }


  // if (!carId) {
  //   var illegalFlag = false,
  //     illegalInfo, lastTime, illegalInterval;
  //   illegalInterval = setInterval(function() {
  //     if (!illegalFlag) {
  //       // 第一次传违规数据
  //       illegalInfo = getInfo(illegalurl, 0);
  //       lastTime = (illegalInfo[illegalInfo.length - 1]).time;
  //       illegalFlag = true;
  //     } else {
  //       illegalInfo = getInfo(illegalurl, lastTime);
  //       lastTime = (illegalInfo[illegalInfo.length - 1]).time;
  //     }
  //     if (!illegalInfo.length) {
  //       for (var i in illegalInfo) {
  //         var m = illegalInfo[i],
  //           htm = "";
  //         var ftime = new Date(m.time);
  //         var stime = ftime.getHours() + " : " + ftime.getMinutes() + " : " + ftime.getSeconds();
  //         htm += '<div class="swiper-slide"><label>' + stime + '</label>&nbsp;&nbsp;&nbsp;' + m.mission.name + '</div>';
  //       }
  //       $("#J_IllegalInfo").append('htm');
  //     }
  //   }, 2000);

  //   // 获取车辆通过赛道的情况
  //   var mlasttime, mInterval, mInfo;
  //   mInterval = setInterval(function() {
  //     mInfo = getInfo(markerurl);
  //     if (!mInfo.length) {

  //     }
  //   }, 60000);


  // }

  // 滚动显示违规信息J_IllegalPanel
  

  // @hetanbi
  var lastTime = 0,index = 1;
  // var illegalInterval = setInterval(function() {
  //   getInfo(1, lastTime);
  //   getInfo(2, lastTime);
  //   getInfo(3, lastTime);
  //   getInfo(4, lastTime);
  //   getInfo(5, lastTime);
  //   getResult(lastTime);
  // }, 2000);

  function getInfo(car_id, time) {
    $.getJSON('{{url("/exam/get_message")}}/car_id/' + car_id + '/time/' + time,
      function(data) {
        if(data.length){
          data.forEach(function(e){
            var unixtime = new Date(e['time'] * 1000);
            unixtime = unixtime.toLocaleTimeString();
            var htm = '<div class="swiper-slide"><label>' + unixtime + '</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' + e['mission']['name'] + ' </div>';
            //@lj修改
            var i = '#id' + car_id;
            $(i).append(htm);
          });

          lastTime = data[data.length - 1].time;
        }
      }
    )
  }

  function getResult(time) {
    $.getJSON(
      "{{url('/match/get_result/')}}" + time,
      function(data) {
        if (data) {
          data.forEach(function(e) {
            var match_time = e['end_time'] - e['start_time'];
            var htm = '<tr> <td>' + index + '</td> <td>' + e['car']['name'] + '</td> <td>' + match_time + '秒</td> <td>' + e['score'] + '</td> </tr>';
            index = index + 1;
            $('#J_ScoreTc').append(htm);
          });
          lastTime = data.end_time;
        }
      }
    )
  }


})