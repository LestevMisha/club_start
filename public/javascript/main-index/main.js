document.addEventListener("DOMContentLoaded", function () {

    /* -------------------------------- hook Qsori02_az -------------------------------- */
    let overlay = document.getElementById('paralax');
    let targetX = 0, targetY = 0;
    let currentX = 0, currentY = 0;
    let vx = 0, vy = 0;
    const stiffness = 0.1;
    const damping = 0.85;

    document.addEventListener('mousemove', (event) => {
        targetX = (event.clientX - window.innerWidth / 2) * 0.01;
        targetY = (event.clientY - window.innerHeight / 2) * 0.01;
    });

    function animate() {
        let dx = targetX - currentX;
        let dy = targetY - currentY;

        vx += dx * stiffness;
        vy += dy * stiffness;

        vx *= damping;
        vy *= damping;

        currentX += vx;
        currentY += vy;

        overlay.style.transform = `translate(${currentX}px, ${currentY}px)`;

        requestAnimationFrame(animate);
    }

    animate();

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
            imgElement.src = "images/dan-6.png";
        } else {
            imgElement.src = "images/dan-4.png";
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

    subsValue.innerHTML = subsSlider.value + '  человек';
    addValue.innerHTML = (addPriceSlider.value).toLocaleString('ru-RU') + ' рублей';

    minResult.textContent = (parseInt(subsSlider.value) * 0.005 * parseInt(addPriceSlider.value)).toLocaleString(
        'ru-RU') +
        ' рублей';
    maxResult.textContent = (parseInt(subsSlider.value) * 0.03 * parseInt(addPriceSlider.value)).toLocaleString(
        'ru-RU') +
        ' рублей';

    addPriceSlider.oninput = function () {
        addValue.innerHTML = (this.value).toLocaleString('ru-RU') + ' рублей';
        minResult.textContent = (parseInt(subsSlider.value) * 0.005 * parseInt(addPriceSlider.value))
            .toLocaleString(
                'ru-RU') + ' рублей';
        maxResult.textContent = (parseInt(subsSlider.value) * 0.03 * parseInt(addPriceSlider.value)).toLocaleString(
            'ru-RU') + ' рублей';
        banknote.style.opacity = 0.7;
    };

    subsSlider.oninput = function () {
        subsValue.innerHTML = this.value + " человек";
        minResult.textContent = (parseInt(subsSlider.value) * 0.005 * parseInt(addPriceSlider.value))
            .toLocaleString(
                'ru-RU') + ' рублей';
        maxResult.textContent = (parseInt(subsSlider.value) * 0.03 * parseInt(addPriceSlider.value)).toLocaleString(
            'ru-RU') + ' рублей';
        banknote.style.opacity = 0.7;
    };

    addPriceSlider.onchange = function () {
        banknote.style.opacity = 0.2;
    };

    subsSlider.onchange = function () {
        banknote.style.opacity = 0.2;
    };

    // blur movement (1st - 2md blocks)
    document.addEventListener('scroll', function () {
        const element = document.querySelector('.b-img.b-img_v23');
        const elementRect = element.getBoundingClientRect();
        const scrollPosition = window.scrollY;
        const offset = scrollPosition / 2;

        if ((elementRect.top > elementRect.height)) {
            // console.log("invisible");
        } else {
            if (!(elementRect.top < -elementRect.height)) {
                // console.log("visible");
                // Move the element up twice as fast as the scroll position
                element.style.transform = `translateY(-${-elementRect.height + offset}px)`;
            } else {
                // console.log("invisible");
            }
        }
    });
});
