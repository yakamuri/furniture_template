var initMenu = (function(){

    function bindEvents(){
        $('.nav-toggle').on('click', function(){
            $('.menu-mobile').show().animate({
                left: "0"
            }, 200);
            console.log('aici');
            $('.logo').hide();
        });
        $('.nav-cancel').on('click', function(){
            $('.menu-mobile').animate({
                left: "100%"
            }, 200, function(){
                $(this).css("left","-100%").hide();
                $('.logo').show();
            });
        });
        $('.menu-mobile ul li a').on('click', function(){
            $('.menu-mobile').animate({
                left: "100%"
            }, 200, function(){
                $(this).css("left","-100%").hide();
                $('.logo').show();
            });
        });
    }

    function init(){
        bindEvents();
    }

    return {
        init: init
    }

})();
$(document).ready(function(){
   initMenu.init();
});