var map = new BMap.Map("mapContainer", {
    // 关闭底图可点功能
    enableMapClick: false
});
function mapInit() {
    var point = new BMap.Point(116.404, 39.915);
    map.centerAndZoom(point, 12);
}
mapInit();
// 设置酷黑个性化地图
map.setMapStyle({
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
// 设置个性化地图 最大缩放级别 18
map.setMaxZoom(18);
var swiper1 = new Swiper('#J_ERR1', {
    autoplay: 2000,//可选选项，自动滑动
    speed:2000,
    loop:true,
    slidesPerView:2,
    direction: 'vertical'
});
var swiper2 = new Swiper('#J_ERR2', {
    autoplay: 2000,//可选选项，自动滑动
    speed:2000,
    loop:true,
    slidesPerView:2,
    direction: 'vertical'
});
var swiper3 = new Swiper('#J_ERR3', {
    autoplay: 2000,//可选选项，自动滑动
    speed:2000,
    loop:true,
    slidesPerView:2,
    direction: 'vertical'
});
var swiper4 = new Swiper('#J_ERR4', {
    autoplay: 2000,//可选选项，自动滑动
    speed:2000,
    loop:true,
    slidesPerView:2,
    direction: 'vertical'
});
var swiper5 = new Swiper('#J_ERR5', {
    autoplay: 2000,//可选选项，自动滑动
    speed:2000,
    loop:true,
    slidesPerView:2,
    direction: 'vertical'
});
    