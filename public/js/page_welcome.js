$(document).ready(function() {
	$('#fullpage').fullpage({
		verticalCentered: false,
		css3: true,
		sectionsColor: [ '#F0F2F4', '#fff', '#fff', '#fff' ],
		navigation: true,
		navigationPosition: 'right',
		navigationTooltips: [ 'Welcome', 'Project' ]
	});
});

var SCREEN_WIDTH = window.innerWidth;
var SCREEN_HEIGHT = window.innerHeight;

//場景設置
var scene = new THREE.Scene();
scene.fog = new THREE.FogExp2(0xf5f5f5, 0.0025);

//攝影機
//張角 , 螢幕比例, 相機最近最遠距離
var camera = new THREE.PerspectiveCamera(50, SCREEN_WIDTH / SCREEN_HEIGHT, 1, 500);

//光源
var light = new THREE.HemisphereLight(0x38b0de, 0x080820, 1);
scene.add(light);

//渲染方式
var renderer = new THREE.WebGLRenderer({
	antialias: true
});

renderer.setSize(SCREEN_WIDTH, SCREEN_HEIGHT);
