import Swiper from "@swiper";
import "@swiper-css";


document.addEventListener("DOMContentLoaded", function () {
    // Swiper_v1 EDfa3d
    var swiper_v1 = new Swiper(".swiper_v1", {
        slidesPerView: 1,
        centeredSlides: true,
        spaceBetween: 32,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            // when window width is >= 640px
            1250: {
                slidesPerView: 3,
            }
        }
    });
    setArrowsCenter(".swiper_v1");

    // Swiper_v2 Klg4g
    var swiper_v2 = new Swiper(".swiper_v2", {
        slidesPerView: 1,
        spaceBetween: 0,
        initialSlide: 0,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        dynamicBullets: true,

        breakpoints: {
            // when window width is >= 640px
            1250: {
                centeredSlides: false,
                slidesPerView: 3,
                loop: false,
            }
        }
    });
    setSlideBlockArrowsCenter(".swiper_v2", ".swiper-button-next", ".swiper-button-prev", "2em");

    // Swiper_v3 StWoom3s
    var swiper_v3 = new Swiper(".swiper_v3", {
        slidesPerView: 1,
        centeredSlides: true,
        spaceBetween: 0,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            // when window width is >= 640px
            1250: {
                slidesPerView: 3,
            }
        }
    });
    setArrowsCenter(".swiper_v3");

    // Swiper_v4 Lopd25
    var swiper_v4 = new Swiper(".swiper_v4", {
        slidesPerView: 1,
        centeredSlides: true,
        spaceBetween: 0,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        }
    });
    setArrowsCenter(".swiper_v4");

    function setArrowsCenter(swiperSelector) {
        try {
            const swiperElement = document.querySelector(swiperSelector);
            if (!swiperElement) throw new Error("Swiper element not found");
            swiperElement.style.position = "unset";

            const swiperRect = swiperElement.getBoundingClientRect();
            const computedStyles = getComputedStyle(swiperElement);
            const navElements = swiperElement.querySelectorAll(".swiper-arrow");

            const paddingTotal = parseInt(computedStyles.paddingTop) + parseInt(computedStyles.paddingBottom) || 0;
            const centerOffset = (swiperRect.height - paddingTotal) / 2;

            navElements.forEach(navEl => {
                const navRect = navEl.getBoundingClientRect();
                const topPosition = centerOffset - (navRect.height / 2);

                // Apply the calculated position and reset vertical margins and padding
                navEl.style.top = `${topPosition}px`;
                navEl.style.marginTop = "0px";
                navEl.style.marginBottom = "0px";
                navEl.style.paddingTop = "0px";
                navEl.style.paddingBottom = "0px";

                if (navEl.classList.contains("swiper-button-prev")) {
                    navEl.style.left = "unset";
                    navEl.style.right = "100%";
                    navEl.style.marginRight = "1em";
                }

                if (navEl.classList.contains("swiper-button-next")) {
                    navEl.style.left = "100%";
                    navEl.style.right = "unset";
                    navEl.style.marginLeft = "1em";
                }
            });
        } catch (error) {
            console.error(`setArrowsCenter failed: ${error.message}`);
        }
    }


    function setSlideBlockArrowsCenter(swiperSelector, nextEl, prevEl, bottomMargin = "0px") {
        try {
            const slide_block = document.querySelector(`${swiperSelector} .__slide-block`);
            var slide_block_height = slide_block.offsetHeight;

            var nextEl = document.querySelector(`${swiperSelector} ${nextEl}`);
            var prevEl = document.querySelector(`${swiperSelector} ${prevEl}`);

            // prev
            prevEl.style.left = "unset";
            prevEl.style.right = "100%";
            prevEl.style.marginRight = "1em";

            // next
            nextEl.style.left = "100%";
            nextEl.style.right = "unset";
            nextEl.style.marginLeft = "1em";


            nextEl.style.top = "auto";
            prevEl.style.top = "auto";
            nextEl.style.bottom = `calc(${slide_block_height / 2}px + ${bottomMargin} - ${nextEl.offsetHeight / 2}px)`;
            prevEl.style.bottom = `calc(${slide_block_height / 2}px + ${bottomMargin} - ${nextEl.offsetHeight / 2}px)`;
        } catch ($_) {
            // TODO
        }
    }


    /* -------------------------------- hook klotMo33_nE --------------------------------  */
    new Swiper(".swiper_v5", {
        effect: "cards",
        grabCursor: true,
        cardsEffect: {
            perSlideOffset: 2, // Space between cards in px
            perSlideRotate: 2, // Rotation of cards in degrees
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        dynamicBullets: true,
    });
    setArrowsCenter(".swiper_v5");
});