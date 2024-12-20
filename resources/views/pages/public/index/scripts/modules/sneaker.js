import { Scene, PerspectiveCamera, WebGLRenderer, Clock, Group, AmbientLight, DirectionalLight, Box3, Vector3 } from "@three";
import { OrbitControls } from "@three-jsm/controls/OrbitControls.js";
import { GLTFLoader } from "@three-jsm/loaders/GLTFLoader.js";
import { EffectComposer } from "@three-jsm/postprocessing/EffectComposer.js";
import { RenderPass } from "@three-jsm/postprocessing/RenderPass.js";
import { FilmPass } from "@three-jsm/postprocessing/FilmPass.js";

document.addEventListener("DOMContentLoaded", () => {

    // disable 3D model for mobile devices
    // if (window.screen.width < 1280) {return;}

    // GLOBAL
    let scene, camera, renderer, controls, gltfObject, clock;
    const sneaker = document.getElementById("js-sneaker");
    const lightSneaker = document.getElementById("js-light-sneaker");

    // init
    function init(lightColor1, lightIntensity1, lightColor2, lightIntensity2, lightColor3, lightIntensity3) {
        scene = new Scene();
        camera = new PerspectiveCamera(75, sneaker.getBoundingClientRect().width / sneaker.getBoundingClientRect().height, 0.1, 1000);
        renderer = new WebGLRenderer({ antialias: true, alpha: true });
        controls = new OrbitControls(camera, renderer.domElement);
        clock = new Clock();

        // renderer settings
        renderer.setPixelRatio(window.devicePixelRatio); // Set the pixel ratio to match the device's
        renderer.setClearColor(0x000000, 0);
        renderer.setSize(sneaker.getBoundingClientRect().width, sneaker.getBoundingClientRect().height);

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
        const pivot = new Group();
        const loader = new GLTFLoader().setPath("assets/3D-models/Nike/");
        loader.load("NikeAirMag-scene.gltf", (gltf) => {
            gltfObject = gltf.scene;
        
            // Scale the model
            gltfObject.scale.set(10.0, 10.0, 10.0);
        
            // Compute bounding box to determine the center
            const boundingBox = new Box3().setFromObject(gltfObject);
            const center = new Vector3();
            boundingBox.getCenter(center);
        
            // Offset the model by its center
            gltfObject.position.set(-center.x, -center.y, -center.z);
        
            // Add the model to the pivot group
            pivot.add(gltfObject);

            // customize position
            pivot.position.y = -2;
            pivot.rotateY(-1.5);
        
            // Add the pivot group to the scene
            scene.add(pivot);
        
            // Show the sneaker and hide the loading overlay
            setTimeout(() => {
                sneaker.style.opacity = 1;
                sneaker.style.visibility = "visible";
            }, 225);
            lightSneaker.remove();
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

        sneaker.appendChild(renderer.domElement);
        renderer.setAnimationLoop(animate);
    }

    function onWindowResize() {
        camera.aspect = sneaker.getBoundingClientRect().width / sneaker.getBoundingClientRect().height;
        camera.updateProjectionMatrix();
        renderer.setSize(sneaker.getBoundingClientRect().width, sneaker.getBoundingClientRect().height);
    }

    function respectiveMode(callback = null) {
        sneaker.style.opacity = 0;
        setTimeout(() => {
            if (callback !== null) {
                callback();
            }
            if (document.body.classList.contains("dark") !== true) {
                init(0x0d6efd, 1, 0xffffff, 3, 0x0d6efd, 10);
            } else {
                init(0x0d6efd, 5, 0xffffff, 0.5, 0x0d6efd, 2.5);
            }
        }, 225);
    }

    respectiveMode();
    window.addEventListener("resize", onWindowResize, false);

    const themeSwitcher = document.getElementById("js-switch-theme-input");
    themeSwitcher.addEventListener("change", () => {
        const canvasToRemove = sneaker.querySelector("canvas");
        respectiveMode(() => {
            sneaker.removeChild(canvasToRemove);
        });
    });

});
