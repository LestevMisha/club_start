import { Scene, PerspectiveCamera, WebGLRenderer, AmbientLight, DirectionalLight, PointLight, Color, Fog } from 'three';
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


// function respectiveMode(callback = null) {
//     globeElement.style.opacity = 0;
//     setTimeout(function () {
//         if (callback !== null) {
//             callback();
//         }
//         if (document.body.classList.contains("lightMode") === true) {
//             init();
//             initGlobe("#d9e8ff", 0xFFFFFF);
//             onWindowResize();
//             animate();
//         } else {
//             init();
//             initGlobe("#0d6efd", 0x220038);
//             // onWindowResize();
//             animate();
//         }
//         globeElement.style.opacity = 1;
//     }, 450);
// }

// respectiveMode();

// const themeSwitcher = document.getElementById("themeSwitcher");
// themeSwitcher.addEventListener("change", function () {
//     const canvasToRemove = globeElement.querySelector("canvas");
//     respectiveMode(function () {
//         globeElement.removeChild(canvasToRemove);
//     });
// });
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

    // scene.fog = new Fog(0x535ef3, 400, 2000);

    controls = new OrbitControls(camera, renderer.domElement);
    controls.enableDamping = true;
    controls.dynamicDampingFactor = 0.01;
    controls.enablePan = false;
    controls.minDistance = 300;
    controls.maxDistance = 400;
    controls.rotateSpeed = 0.8;
    controls.zoomSpeed = 1;
    controls.autoRotate = false;

    // controls.minPolarAngle = Math.PI / 3.5;
    // controls.minPolarAngle = Math.PI - Math.PI / 3;

    window.addEventListener("resize", onWindowResize, false);
    document.addEventListener("mousemove", onMouseMove);
}


function initGlobe() {

    Globe = new ThreeGlobe({
        waitForGlobeReady: true,
        animateIn: true,
    })
        .hexPolygonsData(countries.features)
        .hexPolygonResolution(3)
        .hexPolygonColor(0x0d6efd)
        .hexPolygonMargin(0.3)
        .showAtmosphere(true)
        .atmosphereColor("#0d6efd")
        .atmosphereAltitude(0.2);


    // setTimeout(() => {
    Globe.arcsData(lines.pulls)
        .arcColor((e) => e.color)
        .arcAltitude((e) => e.arcAlt)
        .arcStroke((e) => e.arcStroke)
        .arcDashLength((e) => e.arcDashLength)
        .arcDashGap((e) => e.arcDashGap)
        .arcDashAnimateTime((e) => e.animateSpeed)
        .arcsTransitionDuration(1000)
        .arcDashInitialGap((e) => e.order)
        // .labelsData(map.maps)
        // .labelColor(() => "#000000")

        // .labelDotRadius(1)
        // .labelDotOrientation((e) => e.labelDotOrientation)
        // .labelSize((e) => e.size)
        // .labelText("city")
        // .labelAltitude(0)
        .pointsData(map.maps)
        .pointColor((e) => e.pointColor)
        // .pointsMerge(true)
        .pointAltitude(0.01)
        .pointRadius(0.5)
    // }, 1000);


    Globe.rotateY(-Math.PI * (5 / 12));
    Globe.rotateZ(-Math.PI / 15);
    const globeMaterial = Globe.globeMaterial();
    globeMaterial.color = new Color(0xFFFFFF);
    globeMaterial.emissive = new Color(0x0014c6);
    globeMaterial.emissiveIntensity = 2;
    globeMaterial.shininess = 1.7;
    scene.add(Globe);
}


// function initGlobe() {

//     Globe = new ThreeGlobe({
//         waitForGlobeReady: true,
//         animateIn: true,
//     })
//         .hexPolygonsData(countries.features)
//         .hexPolygonResolution(3)
//         .hexPolygonColor(0xFFFFFF)
//         .hexPolygonMargin(0.3)
//         .showAtmosphere(true)
//         .atmosphereColor("#d9e8ff")
//         .atmosphereAltitude(0.2);


//     // setTimeout(() => {
//     Globe.arcsData(lines.pulls)
//         .arcColor((e) => e.color)
//         .arcAltitude((e) => e.arcAlt)
//         .arcStroke((e) => e.arcStroke)
//         .arcDashLength((e) => e.arcDashLength)
//         .arcDashGap((e) => e.arcDashGap)
//         .arcDashAnimateTime((e) => e.animateSpeed)
//         .arcsTransitionDuration(1000)
//         .arcDashInitialGap((e) => e.order)
//         .labelsData(map.maps)
//         .labelColor(() => "#000000")

//         .labelDotRadius(1)
//         .labelDotOrientation((e) => e.labelDotOrientation)
//         .labelSize((e) => e.size)
//         .labelText("city")
//         .labelAltitude(0)
//         .pointsData(map.maps)
//         .pointColor((e) => e.pointColor)
//         .pointsMerge(true)
//         .pointAltitude((e) => e.pointAltitudeSize)
//         .pointRadius(0.5)
//     // }, 1000);


//     Globe.rotateY(-Math.PI * (5 / 12));
//     Globe.rotateZ(-Math.PI / 15);
//     const globeMaterial = Globe.globeMaterial();
//     globeMaterial.color = new Color(0x0d6efd);
//     globeMaterial.emissive = new Color(0xFFFFFF);
//     globeMaterial.emissiveIntensity = 2;
//     globeMaterial.shininess = 1.7;
//     scene.add(Globe);
// }


function onMouseMove(event) {
    mouseX = event.clientX - windowHalfX;
    mouseY = event.clientY - windowHalfY;
}


function onWindowResize() {
    camera.aspect = globeElement.getBoundingClientRect().width / globeElement.getBoundingClientRect().height;
    camera.updateProjectionMatrix();
    windowHalfX = globeElement.getBoundingClientRect().width / 1.5;
    windowHalfY = globeElement.getBoundingClientRect().height / 1.5;
    renderer.setSize(globeElement.getBoundingClientRect().width, globeElement.getBoundingClientRect().height);
}


function animate() {
    camera.position.x +=
        Math.abs(mouseX) <= windowHalfX / 2
            ? (mouseX / 2 - camera.position.x) * 0.005
            : 0;
    camera.position.y += (-mouseY / 2 - camera.position.y) * 0.005;
    camera.lookAt(scene.position);
    controls.update();
    renderer.render(scene, camera);
    requestAnimationFrame(animate);
}