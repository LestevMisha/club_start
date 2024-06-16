document.addEventListener("DOMContentLoaded", function () {
    $('.slider_v1').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '0px',
        nextArrow: "<svg class='b-img slick-next' xmlns='http://www.w3.org/2000/svg data-name='Layer 1' viewBox='0 0 24 24' id='arrow-right'><path fill='#0d6efd' d='M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z'></path></svg>",
        prevArrow: "<svg class='b-img slick-prev' xmlns='http://www.w3.org/2000/svg' data-name='Layer 1' viewBox='0 0 24 24' id='arrow-left'><path fill='#0d6efd' d='M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z'></path></svg>",
        responsive: [{
            breakpoint: 1250,
            settings: {
                centerMode: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
            }
        },]
    });
    setArrowsCenter("slider_v1");


    $('.slider_v2').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 4,
        slidesToScroll: 2,
        centerMode: true,
        centerPadding: '0px',
        nextArrow: "<svg class='b-img slick-next' xmlns='http://www.w3.org/2000/svg data-name='Layer 1' viewBox='0 0 24 24' id='arrow-right'><path fill='#0d6efd' d='M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z'></path></svg>",
        prevArrow: "<svg class='b-img slick-prev' xmlns='http://www.w3.org/2000/svg' data-name='Layer 1' viewBox='0 0 24 24' id='arrow-left'><path fill='#0d6efd' d='M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z'></path></svg>",
        responsive: [{
            breakpoint: 1250,
            settings: {
                centerMode: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
            }
        },]
    });


    $('.slider_v3').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '0px',
        nextArrow: "<svg class='b-img slick-next' xmlns='http://www.w3.org/2000/svg data-name='Layer 1' viewBox='0 0 24 24' id='arrow-right'><path fill='#0d6efd' d='M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z'></path></svg>",
        prevArrow: "<svg class='b-img slick-prev' xmlns='http://www.w3.org/2000/svg' data-name='Layer 1' viewBox='0 0 24 24' id='arrow-left'><path fill='#0d6efd' d='M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z'></path></svg>",
        responsive: [{
            breakpoint: 1250,
            settings: {
                centerMode: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
            }
        },]
    });
    setArrowsCenter("slider_v3");


    $('.slider_v4').slick({
        lazyLoad: 'ondemand',
        centerMode: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        nextArrow: "<svg class='b-img slick-next' xmlns='http://www.w3.org/2000/svg data-name='Layer 1' viewBox='0 0 24 24' id='arrow-right'><path fill='#0d6efd' d='M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z'></path></svg>",
        prevArrow: "<svg class='b-img slick-prev' xmlns='http://www.w3.org/2000/svg' data-name='Layer 1' viewBox='0 0 24 24' id='arrow-left'><path fill='#0d6efd' d='M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z'></path></svg>",
    });
    setArrowsCenter("slider_v4");


    $('.slider_v5').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: false,
        nextArrow: "<svg class='b-img slick-next' xmlns='http://www.w3.org/2000/svg data-name='Layer 1' viewBox='0 0 24 24' id='arrow-right'><path fill='#0d6efd' d='M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z'></path></svg>",
        prevArrow: "<svg class='b-img slick-prev' xmlns='http://www.w3.org/2000/svg' data-name='Layer 1' viewBox='0 0 24 24' id='arrow-left'><path fill='#0d6efd' d='M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z'></path></svg>",
        responsive: [{
            breakpoint: 1250,
            settings: {
                centerMode: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
            }
        },]
    });

    $('.slider_v6').slick({
        dots: true,
        lazyLoad: 'ondemand',
        centerMode: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        arrows: false
    });
    setArrowsCenter("slider_v6");


    function setArrowsCenter(sliderSelector) {
        try {
            const text_block = document.querySelector(`.${sliderSelector} .__text-block`);
            const slide_block = document.querySelector(`.${sliderSelector} .__slide-block`);

            var text_block_height = text_block.offsetHeight;
            var slide_block_height = slide_block.offsetHeight;

            const calc_top = text_block_height + (slide_block_height / 2);

            document.querySelector(`.${sliderSelector} .slick-next`).style.top = `${calc_top}px`;
            document.querySelector(`.${sliderSelector} .slick-prev`).style.top = `${calc_top}px`;
        } catch ($_) {
            // TODO
        }
    }

});