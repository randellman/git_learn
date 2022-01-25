(function($){
    var $ = jQuery.noConflict();

    $(document).ready(function () {

        if ($(".category-slider").length) {
            jQuery(".category-slider").slick({
                dots: false,
                arrows: true,
                speed: 300,
                variableWidth: true,
                slidesToShow: 7,
                slidesToScroll: 1,
                prevArrow: '<button type="button" class="slick-prev"><img src="/wp-content/themes/best-of-shop/assets/img/svg/sl-arrow-left.svg" alt=""></button>',
                nextArrow: '<button type="button" class="slick-next"><img src="/wp-content/themes/best-of-shop/assets/img/svg/sl-arrow-right.svg" alt=""></button>',

            });
        }

        $('.close_popup_btn').click(function (evt) {
            evt.preventDefault();
            $(this).closest('.popup_wrpr').removeClass('active');
            $(this).closest('body').removeClass('ovh');
        });


        $('body').on('click', '.password-control', function(){
            if ($('.input-password').attr('type') == 'password'){
                $(this).addClass('view');
                $('.input-password').attr('type', 'text');
            } else {
                $(this).removeClass('view');
                $('.input-password').attr('type', 'password');
            }
            return false;
        });

        $('.cart-sidebar_heading').click(function () {
            $(this).toggleClass('active');
        });

        $('.product-page__share .product-page__share-button').click(function () {
            $(this).closest('.product-page__share').toggleClass('active');
        });

        $('.share-close').click(function () {
            $(this).closest('.product-page__share').removeClass('active');
        });

        $('.cart_delete').click(function (evt) {
            evt.preventDefault();
            $(this).closest('.cart_product').addClass('del');
        });

        $('.bonuses_title').click(function () {
            $(this).closest('.bonuses').addClass('active');
        });

        $('.close_dropdown').click(function () {
            $(this).closest('.bonuses').removeClass('active');
        });


        $('.table-shipping .btn_radio input').change(function() {
            if($('.table-shipping .btn_radio input').is(':checked')) {
                $('.table-shipping tbody tr').removeClass('active');
                $(this).closest('tr').addClass('active');
            }
        });

        $(".price-range").ionRangeSlider({
            type: "double",
            grid: true,
            min: 0,
            max: 100,
            from: 10,
            to: 30,
            step: 1
        });
    });
})(jQuery)
