// var $ = jQuery.noConflict();

jQuery(document).ready(function($){
    var uaTwo = window.navigator.userAgent;
    var isIETwo = /MSIE|Trident/.test(uaTwo);

    if (isIETwo) {
        document.documentElement.classList.add('ie');
    }

    if (navigator.userAgent.indexOf('Safari') !== -1 &&
        navigator.userAgent.indexOf('Chrome') === -1) {
        $("body").addClass("safari");
    }

    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.scroll_to_top').addClass('active');
        } else {
            $('.scroll_to_top').removeClass('active');
        }
    });

    $('.scroll_to_top').click(function () {
        $("html, body").animate({scrollTop: 0}, "slow");
        return false;
    });

    if ($("#my-awesome-dropzone").length) {
        jQuery("#my-awesome-dropzone").dropzone({ url: "/file/post" });
    }
}); /* jQuery(document).ready() */
