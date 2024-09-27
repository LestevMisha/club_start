document.addEventListener("DOMContentLoaded", function () {

    /* -------------------------------- hook QsAAi29_1x -------------------------------- */
    const videoIntroParentElement = document.getElementById("video-intro");
    if (videoIntroParentElement) {
        const videoIntro = videoIntroParentElement.querySelector("video");
        const remover = videoIntroParentElement.querySelector(".b-img.b-img_remove");
        const minimizer = videoIntroParentElement.querySelector(".b-img.b-img_remove.v1");
        var toggle = true;

        const toggleSizeAndMute = (isFirst = false) => {
            if (isFirst) toggle = !toggle;
            videoIntroParentElement.style.width = toggle ? "16em" : "8em";
            videoIntroParentElement.style.height = toggle ? "20em" : "10em";

            minimizer.style.display = minimizer.style.display === "flex" ? "none" : "flex";
            remover.style.display = minimizer.style.display === "flex" ? "none" : "flex";

            if (!isFirst) toggle = !toggle;
            videoIntro.muted = toggle;
        };

        remover.addEventListener("click", function () {
            if (minimizer.style.display === "flex") {
                toggleSizeAndMute(true);
            } else {
                videoIntroParentElement.remove();
            }
        });

        videoIntroParentElement.addEventListener("click", function () {
            toggleSizeAndMute();
        });
    }  


    /* -------------------------------- hook Doors72_da -------------------------------- */
    // Backgroun grad-text
    function gradientize(target) {
        const followGrad = target.querySelector('#follow-gradient');
        const gradText = target.querySelector('#follow-gradient .grad-text');

        gradText.textContent = generateRandomString(20_000);

        let mouseX = 0;
        let mouseY = 0;
        let isMoving = false;
        var rect = followGrad.getBoundingClientRect();

        target.addEventListener("mousemove", function (event) {
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
    const gradTarget1 = document.getElementById("gradient-effect_bf2");
    if (gradTarget1) {
        gradientize(gradTarget1);
    }


    /* -------------------------------- hook Astod62_ds--------------------------------  */
    function switchImageBasedOnWidth() {
        const imgElement = document.getElementById('responsive-img');
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
    window.addEventListener('resize', switchImageBasedOnWidth);


    /* -------------------------------- hook Stopp09_er --------------------------------  */
    // calculator logic
    var subsSlider = document.getElementById("subs");
    var addPriceSlider = document.getElementById("add-price");
    var addValue = document.getElementById("add-price-value");
    var subsValue = document.getElementById("subs-value");
    var banknote = document.getElementById("banknote");

    var minResult = document.getElementById("min-result");
    var maxResult = document.getElementById("max-result");

    subsValue.innerHTML = subsSlider.value;
    addValue.innerHTML = (addPriceSlider.value).toLocaleString('ru-RU');

    minResult.textContent = (parseInt(subsSlider.value) * 0.005 * parseInt(addPriceSlider.value)).toLocaleString(
        'ru-RU');
    maxResult.textContent = (parseInt(subsSlider.value) * 0.03 * parseInt(addPriceSlider.value)).toLocaleString(
        'ru-RU');

    addPriceSlider.oninput = function () {
        addValue.innerHTML = (this.value).toLocaleString('ru-RU');
        minResult.textContent = (parseInt(subsSlider.value) * 0.005 * parseInt(addPriceSlider.value))
            .toLocaleString(
                'ru-RU');
        maxResult.textContent = (parseInt(subsSlider.value) * 0.03 * parseInt(addPriceSlider.value)).toLocaleString(
            'ru-RU');
        banknote.style.opacity = 0.7;
    };

    subsSlider.oninput = function () {
        subsValue.innerHTML = this.value;
        minResult.textContent = (parseInt(subsSlider.value) * 0.005 * parseInt(addPriceSlider.value))
            .toLocaleString(
                'ru-RU');
        maxResult.textContent = (parseInt(subsSlider.value) * 0.03 * parseInt(addPriceSlider.value)).toLocaleString(
            'ru-RU');
        banknote.style.opacity = 0.7;
    };

    addPriceSlider.onchange = function () {
        banknote.style.opacity = 0.2;
    };

    subsSlider.onchange = function () {
        banknote.style.opacity = 0.2;
    };

    // blur movement (1st - 2md blocks)
    /* -------------------------------- hook EDoLA02_93 -------------------------------- */
    useVisibleFrame(document.querySelector('.b-img.b-img_v23'), (element, elementRect, scrollPosition) => {
        // Move the element up twice as fast as the scroll position
        element.style.transform = `translateY(-${-elementRect.height + scrollPosition / 2}px)`;
    });

    function useVisibleFrame(element, callback) {
        document.addEventListener('scroll', function () {
            const elementRect = element.getBoundingClientRect();
            const scrollPosition = window.scrollY;

            if ((elementRect.top > elementRect.height)) {
                // invisible
            } else {
                if (!(elementRect.top < -elementRect.height)) {
                    // visible
                    callback(element, elementRect, scrollPosition);

                } else {
                    // invisible
                }
            }
        });
    }

});
