var resizeContent = (function(){

    function bindEvent(){
        var headerH = $('header').outerHeight();
        var footerH = $('footer').outerHeight();
        var windowH = $(window).height();

        var middleH = windowH - (headerH + footerH);

        $('.middle').height(middleH);
    }
    
    function init() {
        bindEvent();
    }

    return {
        init: init
    }
})();
resizeContent.init();