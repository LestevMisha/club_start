import Swiper from "@swiper";
import "@swiper-css";


document.addEventListener("DOMContentLoaded", () => {

    const defaultSettings = {
        loop: false,
        centeredSlides: false,
        slidesPerView: 1,
        spaceBetween: 0,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    };

    /* -------------------------------- Swiper_v1 hook Klg4g --------------------------------  */
    new Swiper(".js-swiper-v1", {
        ...defaultSettings,
        breakpoints: {
            1280: {
                slidesPerView: 3
            }
        }
    });
    centerArrows(".js-swiper-v1");

    /* -------------------------------- Swiper_v2 hook EDfa3d --------------------------------  */
    new Swiper(".js-swiper-v2", {
        ...defaultSettings,
        breakpoints: {
            1250: {
                spaceBetween: 32,
                slidesPerView: 3
            }
        }
    });
    centerArrows(".js-swiper-v2");

    /* -------------------------------- Swiper_v5 hook klotMo33_nE --------------------------------  */
    new Swiper(".js-swiper-v5", {
        ...defaultSettings,
        spaceBetween: 32,
        breakpoints: {
            1250: {
                spaceBetween: 0,
            }
        }
    });
    centerArrows(".js-swiper-v5");

    /* -------------------------------- Swiper_v3 hook StWoom3s --------------------------------  */
    new Swiper(".js-swiper-v3", {
        ...defaultSettings,
        breakpoints: {
            // when window width is >= 640px
            1250: {
                slidesPerView: 3,
            }
        }
    });
    centerArrows(".js-swiper-v3");

    
    // helpers
    function centerArrows(swiperSelector, bottomMargin = "2rem", nextEl=".swiper-button-next", prevEl=".swiper-button-prev") {
        const slide_block = document.querySelector(`${swiperSelector} .js-justify-arrows`);
        const slide_block_height = slide_block.offsetHeight;

        const _nextEl = document.querySelector(`${swiperSelector} ${nextEl}`);
        const _prevEl = document.querySelector(`${swiperSelector} ${prevEl}`);

        // prev
        _prevEl.style.left = "unset";
        _prevEl.style.right = "100%";
        // next
        _nextEl.style.left = "100%";
        _nextEl.style.right = "unset";

        _nextEl.style.top = "auto";
        _prevEl.style.top = "auto";
        _nextEl.style.bottom = `calc(${slide_block_height / 2}px + ${bottomMargin} - ${_nextEl.offsetHeight / 2}px)`;
        _prevEl.style.bottom = `calc(${slide_block_height / 2}px + ${bottomMargin} - ${_nextEl.offsetHeight / 2}px)`;
    }

    // // Swiper_v4 Lopd25
    // var swiper_v4 = new Swiper(".swiper_v4", {
    //     slidesPerView: 1,
    //     centeredSlides: true,
    //     spaceBetween: 0,
    //     loop: true,
    //     navigation: {
    //         nextEl: ".swiper-button-next",
    //         prevEl: ".swiper-button-prev",
    //     }
    // });
    // setArrowsCenter(".swiper_v4");

    // function setArrowsCenter(swiperSelector) {
    //     try {
    //         const swiperElement = document.querySelector(swiperSelector);
    //         if (!swiperElement) throw new Error("Swiper element not found");
    //         swiperElement.style.position = "unset";

    //         const swiperRect = swiperElement.getBoundingClientRect();
    //         const computedStyles = getComputedStyle(swiperElement);
    //         const navElements = swiperElement.querySelectorAll(".swiper-arrow");

    //         const paddingTotal = parseInt(computedStyles.paddingTop) + parseInt(computedStyles.paddingBottom) || 0;
    //         const centerOffset = (swiperRect.height - paddingTotal) / 2;

    //         navElements.forEach(navEl => {
    //             const navRect = navEl.getBoundingClientRect();
    //             const topPosition = centerOffset - (navRect.height / 2);

    //             // Apply the calculated position and reset vertical margins and padding
    //             navEl.style.top = `${topPosition}px`;
    //             navEl.style.marginTop = "0px";
    //             navEl.style.marginBottom = "0px";
    //             navEl.style.paddingTop = "0px";
    //             navEl.style.paddingBottom = "0px";

    //             if (navEl.classList.contains("swiper-button-prev")) {
    //                 navEl.style.left = "unset";
    //                 navEl.style.right = "100%";
    //                 // navEl.style.marginRight = "1rem";
    //             }

    //             if (navEl.classList.contains("swiper-button-next")) {
    //                 navEl.style.left = "100%";
    //                 navEl.style.right = "unset";
    //                 // navEl.style.marginLeft = "1rem";
    //             }
    //         });
    //     } catch (error) {
    //         console.error(`setArrowsCenter failed: ${error.message}`);
    //     }
    // }
});