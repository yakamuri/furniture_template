var customSwiper = (function(){

    function bindEvents() {
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev'
        });
        console.log('aici');
    }

    function init() {
        bindEvents();
    }
    
    return {
        init: init
    }
    
})();
customSwiper.init();