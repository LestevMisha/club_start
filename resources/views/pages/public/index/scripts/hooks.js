document.addEventListener("DOMContentLoaded", () => {

    /* -------------------------------- hook QsAAi29_1x -------------------------------- */
    const videoIntroParentElement = document.getElementById("video-intro");
    if (videoIntroParentElement) {
        const videoIntro = videoIntroParentElement.querySelector("video");
        const remover = videoIntroParentElement.querySelector(".b-img.b-img_remove");
        const minimizer = videoIntroParentElement.querySelector(".b-img.b-img_remove.v1");
        let toggle = true;

        const toggleSizeAndMute = (isFirst = false) => {
            if (isFirst) {toggle = !toggle;}
            videoIntroParentElement.style.width = toggle ? "16em" : "8em";
            videoIntroParentElement.style.height = toggle ? "20em" : "10em";

            minimizer.style.display = minimizer.style.display === "flex" ? "none" : "flex";
            remover.style.display = minimizer.style.display === "flex" ? "none" : "flex";

            if (!isFirst) {toggle = !toggle;}
            videoIntro.muted = toggle;
        };

        remover.addEventListener("click", () => {
            if (minimizer.style.display === "flex") {
                toggleSizeAndMute(true);
            } else {
                videoIntroParentElement.remove();
            }
        });

        videoIntroParentElement.addEventListener("click", () => {
            toggleSizeAndMute();
        });
    }  


    /* -------------------------------- hook Doors72_da -------------------------------- */
    // Backgroun grad-text
    function gradientize(target) {
        const followGrad = target.querySelector("#js-follow-gradient");
        const gradText = target.querySelector("#js-follow-gradient .js-gradient-text");

        gradText.textContent = generateRandomString(20_000);

        let mouseX = 0;
        let mouseY = 0;
        let isMoving = false;
        let rect = followGrad.getBoundingClientRect();

        target.addEventListener("mousemove", (event) => {
            rect = followGrad.getBoundingClientRect();
            mouseX = event.clientX - rect.left;
            mouseY = event.clientY - rect.top;
            if (!isMoving) {
                isMoving = true;
                gradText.textContent = generateRandomString(10_000);

                requestAnimationFrame(updatePosition);
            }
        });

        function updatePosition() {
            const currentPosition = `${mouseX - (rect.width / 2)}px ${mouseY - (rect.height / 2)}px`;
            followGrad.style.maskPosition = currentPosition;
            followGrad.style.backgroundPosition = currentPosition;
            isMoving = false;
        }
    }
    // String generator
    function generateRandomString(length) {
        let result = "";
        for (let i = 0; i < length; i++) {
            result += " KLUB START ";
        }
        return result;
    }
    const gradTarget1 = document.getElementById("js-gradient-effect");
    if (gradTarget1) {
        gradientize(gradTarget1);
    }


    /* -------------------------------- hook Astod62_ds--------------------------------  */
    function switchImageBasedOnWidth() {
        const imgElement = document.getElementById("responsive-img");
        const screenWidth = window.innerWidth;

        if (screenWidth < 1250) {
            imgElement.src = "assets/images/dan-6.png";
        } else {
            imgElement.src = "assets/images/dan-4.png";
        }
    }
    // Initial check
    switchImageBasedOnWidth();
    // Add event listener for window resize
    window.addEventListener("resize", switchImageBasedOnWidth);


    /* -------------------------------- hook Stopp09_er --------------------------------  */
    // calculator logic
    const subsSlider = document.getElementById("subs");
    const addPriceSlider = document.getElementById("add-price");
    const addValue = document.getElementById("add-price-value");
    const subsValue = document.getElementById("subs-value");
    const banknote = document.getElementById("js-banknote");

    const minResult = document.getElementById("min-result");
    const maxResult = document.getElementById("max-result");

    subsValue.innerHTML = subsSlider.value;
    addValue.innerHTML = (addPriceSlider.value).toLocaleString("ru-RU");

    minResult.textContent = (parseInt(subsSlider.value) * 0.005 * parseInt(addPriceSlider.value)).toLocaleString(
        "ru-RU");
    maxResult.textContent = (parseInt(subsSlider.value) * 0.03 * parseInt(addPriceSlider.value)).toLocaleString(
        "ru-RU");

    addPriceSlider.oninput = function () {
        addValue.innerHTML = (this.value).toLocaleString("ru-RU");
        minResult.textContent = (parseInt(subsSlider.value) * 0.005 * parseInt(addPriceSlider.value))
            .toLocaleString(
                "ru-RU");
        maxResult.textContent = (parseInt(subsSlider.value) * 0.03 * parseInt(addPriceSlider.value)).toLocaleString(
            "ru-RU");
        banknote.style.opacity = 0.7;
    };

    subsSlider.oninput = function () {
        subsValue.innerHTML = this.value;
        minResult.textContent = (parseInt(subsSlider.value) * 0.005 * parseInt(addPriceSlider.value))
            .toLocaleString(
                "ru-RU");
        maxResult.textContent = (parseInt(subsSlider.value) * 0.03 * parseInt(addPriceSlider.value)).toLocaleString(
            "ru-RU");
        banknote.style.opacity = 0.7;
    };

    addPriceSlider.onchange = function () {
        banknote.style.opacity = 0.2;
    };

    subsSlider.onchange = function () {
        banknote.style.opacity = 0.2;
    };
});
