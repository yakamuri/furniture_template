var customSwiper = (function(){

    function bindEvents() {
        var swiperCustom = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev'
        });
    }

    function initProductSlider(){
        var galleryTop = new Swiper('.gallery-top.swiper-container', {
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            }
        });
        var galleryThumbs = new Swiper('.gallery-thumbs.swiper-container', {
            spaceBetween: 10,
            //centeredSlides: true,
            slidesPerView: 'auto',
            touchRatio: 0.2,
            slideToClickedSlide: true
        });

        console.log(galleryTop);
        console.log(galleryThumbs);

        galleryTop.controller.control = galleryThumbs;
        galleryThumbs.controller.control = galleryTop;
    }

    function init() {
        bindEvents();
        initProductSlider();
    }
    
    return {
        init: init
    }
    
})();
$(document).ready(function () {
    customSwiper.init();
});