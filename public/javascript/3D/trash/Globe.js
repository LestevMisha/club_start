import { Scene, PerspectiveCamera, WebGLRenderer, AmbientLight, DirectionalLight, PointLight, Color, Clock } from 'three';
import { OrbitControls } from './three.js/examples/jsm/controls/OrbitControls.js';
import ThreeGlobe from 'three-globe';

// json
import countries from "./custom.geo.json" assert { type: "json" };
import lines from "./lines.json" assert { type: "json" };
import map from "./map.json" assert { type: "json" };

var renderer, camera, scene, controls;

const globeElement = document.getElementById("globe");

let mouseX = 0;
let mouseY = 0;
let windowHalfX = globeElement.getBoundingClientRect().width / 2;
let windowHalfY = globeElement.getBoundingClientRect().height / 2;
var Globe;
var clock = new Clock();

init();
initGlobe();
onWindowResize();
animate();


function init() {
    renderer = new WebGLRenderer({ antialias: true, alpha: true });
    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.setSize(globeElement.getBoundingClientRect().width, globeElement.getBoundingClientRect().height);
    renderer.setClearColor(0x000000, 0);
    globeElement.appendChild(renderer.domElement);

    scene = new Scene();

    var ambientLight = new AmbientLight(0xBBBBBB, 0.3);
    scene.add(ambientLight);

    camera = new PerspectiveCamera();
    camera.aspect = globeElement.getBoundingClientRect().width / globeElement.getBoundingClientRect().height;
    camera.updateProjectionMatrix();

    var dLight = new DirectionalLight(0xffffff, 0.8);
    dLight.position.set(-800, 2000, 400);
    camera.add(dLight);

    var dLight1 = new DirectionalLight(0x7982f6, 1);
    dLight1.position.set(-200, 500, 200);
    camera.add(dLight1);

    var dLight2 = new PointLight(0x8566cc, 0.5);
    dLight2.position.set(-200, 500, 200);
    camera.add(dLight2);

    camera.position.z = 300;
    camera.position.x = 0;
    camera.position.y = 0;

    scene.add(camera);

    controls = new OrbitControls(camera, renderer.domElement);
    controls.enableDamping = true;
    controls.dynamicDampingFactor = 0.1;
    controls.enablePan = false;
    controls.enableZoom = false;
    controls.rotateSpeed = 0.8;
    controls.zoomSpeed = 1;
    controls.autoRotate = false;


    window.addEventListener("resize", onWindowResize, false);
    // document.addEventListener("mousemove", onMouseMove);
}


function initGlobe() {

    Globe = new ThreeGlobe()
        .hexPolygonsData(countries.features)
        .hexPolygonResolution(3)
        .hexPolygonColor(0x0d6efd)
        .hexPolygonMargin(0.5)
        .showAtmosphere(true)
        .showGraticules(true)
    .atmosphereColor("#0d6efd")
    .atmosphereAltitude(0.1);

    Globe.arcsData(lines.pulls)
        .arcColor((e) => e.color)
        .arcAltitude((e) => e.arcAlt)
        .arcStroke((e) => e.arcStroke)
        .arcDashLength((e) => e.arcDashLength)
        .arcDashGap((e) => e.arcDashGap)
        .arcDashAnimateTime((e) => e.animateSpeed)
        .arcsTransitionDuration(1000)
        .arcDashInitialGap((e) => e.order)
        .pointsData(map.maps)
        .pointColor((e) => e.pointColor)
        .pointAltitude(0.01)
        .pointRadius(0.5)

    // Rotate the globe
    Globe.rotateY(-Math.PI * (5 / 12));
    Globe.rotateZ(-Math.PI / 15);

    // // Get the globe material
    const globeMaterial = Globe.globeMaterial();

    // // Set the material properties for transparency
    globeMaterial.color = new Color(0x0d6efd);
    globeMaterial.transparent = true; // Enable transparency
    globeMaterial.opacity = 0.2; // Set the opacity level (adjust as needed)
    globeMaterial.emissive = new Color(0xc600ab);
    globeMaterial.emissiveIntensity = .1;
    scene.add(Globe);

}

function onMouseMove(event) {
   

    // mouseX = event.clientX - windowHalfX;
    // mouseY = event.clientY - windowHalfY;
}

function onWindowResize() {
    camera.aspect = globeElement.getBoundingClientRect().width / globeElement.getBoundingClientRect().height;
    camera.updateProjectionMatrix();
    windowHalfX = globeElement.getBoundingClientRect().width / 1.5;
    windowHalfY = globeElement.getBoundingClientRect().height / 1.5;
    renderer.setSize(globeElement.getBoundingClientRect().width, globeElement.getBoundingClientRect().height);
}


function animate() {
    const time = clock.getElapsedTime();
    camera.position.y = Math.sin(time) * 5;
    renderer.render(scene, camera);
    requestAnimationFrame(animate);
}