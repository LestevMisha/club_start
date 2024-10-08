import { Scene, PerspectiveCamera, WebGLRenderer, Clock, Group, AmbientLight, DirectionalLight } from '@three';
import { OrbitControls } from '@three-jsm/controls/OrbitControls.js';
import { GLTFLoader } from '@three-jsm/loaders/GLTFLoader.js';
import { EffectComposer } from '@three-jsm/postprocessing/EffectComposer.js';
import { RenderPass } from '@three-jsm/postprocessing/RenderPass.js';
import { FilmPass } from '@three-jsm/postprocessing/FilmPass.js';

document.addEventListener("DOMContentLoaded", function () {

    // GLOBAL
    let scene, camera, renderer, controls, gltfObject, clock;
    const anchorElement = document.getElementById("anchor");
    const loadingOverlay = document.getElementById("loadingOverlay");

    // init
    function init(lightColor1, lightIntensity1, lightColor2, lightIntensity2, lightColor3, lightIntensity3) {
        scene = new Scene();
        camera = new PerspectiveCamera(75, anchorElement.getBoundingClientRect().width / anchorElement.getBoundingClientRect().height, 0.1, 1000);
        renderer = new WebGLRenderer({ antialias: true, alpha: true });
        controls = new OrbitControls(camera, renderer.domElement);
        clock = new Clock();

        // renderer settings
        renderer.setPixelRatio(window.devicePixelRatio); // Set the pixel ratio to match the device's
        renderer.setClearColor(0x000000, 0);
        renderer.setSize(anchorElement.getBoundingClientRect().width, anchorElement.getBoundingClientRect().height);

        // camera settings
        camera.position.set(0, 9, 0);
        camera.lookAt(0, 0, 0); // camera looks at the boom's zero

        // controls orbit settings
        controls.minDistance = 9;
        controls.enableZoom = false; // Disable zooming
        controls.minPolarAngle = Math.PI / 2;
        controls.maxPolarAngle = Math.PI / 2;
        controls.update();

        // elements
        var pivot = new Group();
        const loader = new GLTFLoader().setPath('assets/3D-models/Nike/');
        loader.load('NikeAirMag-scene.gltf', function (gltf) {
            gltfObject = gltf.scene;
            gltf.scene.scale.set(8.0, 8.0, 8.0);
            gltf.scene.position.set(0, 0, 0);
            gltfObject.position.z = -4;
            pivot.rotateY(-2);

            scene.add(pivot);
            pivot.add(gltfObject);

            anchorElement.style.opacity = 1;
            anchorElement.style.visibility = "visible";
            loadingOverlay.style.visibility = "hidden"; // Hide the loading overlay
        });
        const light = new AmbientLight(lightColor1, lightIntensity1); // soft white light
        scene.add(light);
        const light2 = new AmbientLight(lightColor2, lightIntensity2); // soft white light
        scene.add(light2);
        const directionalLight = new DirectionalLight(0xffffff, 2.5);
        scene.add(directionalLight);
        const directionalLight2 = new DirectionalLight(lightColor3, lightIntensity3);
        scene.add(directionalLight2);

        // animate
        function animate() {
            // Rotate the loaded object
            if (gltfObject) {
                const time = clock.getElapsedTime();
                gltfObject.position.y = Math.cos(time) * 0.1;
                pivot.rotateY(Math.cos(time) * (-0.001));
            }
            renderer.render(scene, camera);
            composer.render();
        }

        // finish up
        const composer = new EffectComposer(renderer);

        const renderPass = new RenderPass(scene, camera);
        composer.addPass(renderPass);

        const glitchPass = new FilmPass(
            0.35, // noise intensity
            0.6, // scanline intensity
            2048, // scanline count
            false, // grayscale
        );
        composer.addPass(glitchPass);

        anchorElement.appendChild(renderer.domElement);
        renderer.setAnimationLoop(animate);
    }

    function onWindowResize() {
        camera.aspect = anchorElement.getBoundingClientRect().width / anchorElement.getBoundingClientRect().height;
        camera.updateProjectionMatrix();
        renderer.setSize(anchorElement.getBoundingClientRect().width, anchorElement.getBoundingClientRect().height);
    }

    function respectiveMode(callback = null) {
        anchorElement.style.opacity = 0;
        setTimeout(function () {
            if (callback !== null) {
                callback();
            }
            if (document.body.classList.contains("lightMode") === true) {
                init(0x0d6efd, 1, 0xffffff, 3, 0x0d6efd, 10);
            } else {
                init(0x0d6efd, 5, 0xffffff, 0.5, 0x0d6efd, 2.5);
            }
        }, 225);
    }

    respectiveMode();
    window.addEventListener("resize", onWindowResize, false);

    const themeSwitcher = document.getElementById("js-theme-switcher");
    themeSwitcher.addEventListener("change", function () {
        const canvasToRemove = anchorElement.querySelector("canvas");
        respectiveMode(function () {
            anchorElement.removeChild(canvasToRemove);
        });
    });

});
