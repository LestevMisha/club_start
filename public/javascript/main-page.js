document.addEventListener("DOMContentLoaded", function () {

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
            imgElement.src = "images/dan-5.png";
        }
    }
    // Initial check
    switchImageBasedOnWidth();
    // Add event listener for window resize
    window.addEventListener('resize', switchImageBasedOnWidth);


    /* -------------------------------- hook Gloof49_ck --------------------------------  */
    // make text shorter ... for accordion
    function truncateText(element, maxLetters) {
        let text = element.textContent.replace(/\s+/g, '');
        if (text.length > maxLetters) {
            let truncatedText = '';
            let letterCount = 0;

            for (let char of element.textContent) {
                if (char !== ' ') {
                    letterCount++;
                }
                if (letterCount > maxLetters) {
                    truncatedText += '...';
                    break;
                }
                truncatedText += char;
            }

            element.textContent = truncatedText;
        }
    }
    const textElements = document.querySelectorAll('.accordion-item .b-text.b-text_2em');
    const buttons = document.querySelectorAll('.accordion-item button');

    textElements.forEach(textElement => {
        // Store the full text in a data attribute
        textElement.dataset.fullText = textElement.textContent;
        truncateText(textElement, 40);
    });

    buttons.forEach(button => {
        button.addEventListener("click", function () {
            const textElement = this.querySelector('.b-text.b-text_2em');
            const isExpanded = this.getAttribute('aria-expanded') === 'true';

            if (!isExpanded) {
                // If not expanded, truncate the text
                truncateText(textElement, 40);
            } else {
                // If expanded, show the full text
                textElement.textContent = textElement.dataset.fullText;
            }
        });
    });


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


    /* -------------------------------- hook klotMo33_nE --------------------------------  */
    new Swiper(".mySwiper", {
        effect: "cards",
        grabCursor: true,
        cardsEffect: {
            perSlideOffset: 2, // Space between cards in px
            perSlideRotate: 2, // Rotation of cards in degrees
        },
        on: {
            slideChange: function () {
                console.log(document.querySelectorAll('.swiper-slide video'));
                // Pause all videos
                document.querySelectorAll('.swiper-slide video').forEach(video => {
                    video.pause();
                });
                // Play the active video
                setTimeout(() => {
                    const activeSlide = document.querySelector('.swiper-slide-active video');
                    console.log(activeSlide);
                    if (activeSlide) {
                        activeSlide.play();
                    }
                }, 10);
            },
            init: function () {
                // Pause all videos initially
                document.querySelectorAll('.swiper-slide video').forEach(video => {
                    video.pause();
                });
                // Play the active video on load
                const activeSlide = document.querySelector('.swiper-slide-active video');
                if (activeSlide) {
                    activeSlide.play();
                }
            }
        }
    });

});
