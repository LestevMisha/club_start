import Swiper from "@swiper";
import "@swiper-css";


document.addEventListener("DOMContentLoaded", function () {
    // Swiper_v1 EDfa3d
    var swiper_v1 = new Swiper(".swiper_v1", {
        slidesPerView: 1,
        centeredSlides: true,
        spaceBetween: 32,
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
    setArrowsCenter(".swiper_v1", ".swiper-button-next", ".swiper-button-prev");

    // Swiper_v2 Klg4g
    var swiper_v2 = new Swiper(".swiper_v2", {
        slidesPerView: 1,
        spaceBetween: 0,
        initialSlide: 0,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            // when window width is >= 640px
            1250: {
                centeredSlides: false,
                slidesPerView: 3,
                loop: false,
            }
        }
    });
    setArrowsCenter(".swiper_v2", ".swiper-button-next", ".swiper-button-prev", "2em");

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
    setArrowsCenter(".swiper_v3", ".swiper-button-next", ".swiper-button-prev");

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
    setArrowsCenter(".swiper_v4", ".swiper-button-next", ".swiper-button-prev");

    function setArrowsCenter(swiperSelector, nextEl, prevEl, bottomMargin = "0px") {
        try {
            const slide_block = document.querySelector(`${swiperSelector} .__slide-block`);
            var slide_block_height = slide_block.offsetHeight;

            var nextEl = document.querySelector(`${swiperSelector} ${nextEl}`);
            var prevEl = document.querySelector(`${swiperSelector} ${prevEl}`);

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
        on: {
            slideChange: function () {
                // Pause all videos
                document.querySelectorAll('.swiper-slide video').forEach(video => {
                    video.pause();
                });
                // Play the active video
                setTimeout(() => {
                    const activeSlide = document.querySelector('.swiper-slide-active video');
                    // if (activeSlide) {
                    //     activeSlide.play();
                    // }
                }, 10);
            },
            init: function () {
                // Pause all videos initially
                document.querySelectorAll('.swiper-slide video').forEach(video => {
                    video.pause();
                });
                // Play the active video on load
                const activeSlide = document.querySelector('.swiper-slide-active video');
                // if (activeSlide) {
                //     activeSlide.play();
                // }
            }
        }
    });
});