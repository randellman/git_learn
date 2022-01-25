console.log('br1');


(function($){
    console.log('br2');
    var $ = jQuery.noConflict();

    $(document).ready(function () {
        console.log('br3');
        let searchInput = document.querySelector('.input-search');
        let seachDrop = document.querySelector('.search-dropdown')
        if(searchInput) {
            searchInput.addEventListener('input', findResult)
        }
        function findResult (e) {
            let inputValue = this.value.length
            if(inputValue > 0) {
                seachDrop.classList.add('open')
            } else {
                seachDrop.classList.remove('open')
            }
        }

        $('.custom-select__button').click(function() {

            if($(this).parent().hasClass('open')){
                $(this).parent().removeClass('open')
                $(this).parent().find('.custom-select__dropdown').slideUp(200)
            } else {
                $('.custom-select').removeClass('open');
                $('.custom-select__dropdown').slideUp(200)
                $(this).parent().addClass('open')
                $(this).parent().find('.custom-select__dropdown').slideDown(200)
            }

        })

        $(".acordeon-menu li > a:not('.link')").click(function (e) {
            e.preventDefault();
            var link = $(this);
            var closest_ul = link.closest("ul");
            var parallel_active_links = closest_ul.find(".active");
            var closest_li = link.closest("li");
            var link_status = closest_li.hasClass("active");
            var arrow = link.find(".menu__arrow");
            var count = 0;

            closest_ul.find(".sub-menu").slideUp(200, function () {
                if (++count == closest_ul.find(".sub-menu").length) parallel_active_links.removeClass("active");
            });

            if (!link_status) {
                closest_li.children(".sub-menu").slideDown(200);
                closest_li.addClass("active");
                arrow.addClass("active");
            }
        });

        var isoCountries = [
            { id: 'AF', text: 'Afghanistan'},
            { id: 'AX', text: 'Aland Islands'},
            { id: 'AL', text: 'Albania'},
            { id: 'DZ', text: 'Algeria'},
            { id: 'AS', text: 'American Samoa'},
            { id: 'AD', text: 'Andorra'},
            { id: 'AO', text: 'Angola'},
            { id: 'AI', text: 'Anguilla'},
            { id: 'AQ', text: 'Antarctica'},
            { id: 'AG', text: 'Antigua And Barbuda'},
            { id: 'AR', text: 'Argentina'},
            { id: 'AM', text: 'Armenia'},
            { id: 'AW', text: 'Aruba'},
            { id: 'AU', text: 'Australia'},
            { id: 'AT', text: 'Austria'},
            { id: 'AZ', text: 'Azerbaijan'},
            { id: 'BS', text: 'Bahamas'},
            { id: 'BH', text: 'Bahrain'},
            { id: 'BD', text: 'Bangladesh'},
            { id: 'BB', text: 'Barbados'},
            { id: 'BY', text: 'Belarus'},
            { id: 'BE', text: 'Belgium'},
            { id: 'BZ', text: 'Belize'},
            { id: 'BJ', text: 'Benin'},
            { id: 'BM', text: 'Bermuda'},
            { id: 'BT', text: 'Bhutan'},
            { id: 'BO', text: 'Bolivia'},
            { id: 'BA', text: 'Bosnia And Herzegovina'},
            { id: 'BW', text: 'Botswana'},
            { id: 'BV', text: 'Bouvet Island'},
            { id: 'BR', text: 'Brazil'},
            { id: 'IO', text: 'British Indian Ocean Territory'},
            { id: 'BN', text: 'Brunei Darussalam'},
            { id: 'BG', text: 'Bulgaria'},
            { id: 'BF', text: 'Burkina Faso'},
            { id: 'BI', text: 'Burundi'},
            { id: 'KH', text: 'Cambodia'},
            { id: 'CM', text: 'Cameroon'},
            { id: 'CA', text: 'Canada'},
            { id: 'CV', text: 'Cape Verde'},
            { id: 'KY', text: 'Cayman Islands'},
            { id: 'CF', text: 'Central African Republic'},
            { id: 'TD', text: 'Chad'},
            { id: 'CL', text: 'Chile'},
            { id: 'CN', text: 'China'},
            { id: 'CX', text: 'Christmas Island'},
            { id: 'CC', text: 'Cocos (Keeling) Islands'},
            { id: 'CO', text: 'Colombia'},
            { id: 'KM', text: 'Comoros'},
            { id: 'CG', text: 'Congo'},
            { id: 'CD', text: 'Congo}, Democratic Republic'},
            { id: 'CK', text: 'Cook Islands'},
            { id: 'CR', text: 'Costa Rica'},
            { id: 'CI', text: 'Cote D\'Ivoire'},
            { id: 'HR', text: 'Croatia'},
            { id: 'CU', text: 'Cuba'},
            { id: 'CY', text: 'Cyprus'},
            { id: 'CZ', text: 'Czech Republic'},
            { id: 'DK', text: 'Denmark'},
            { id: 'DJ', text: 'Djibouti'},
            { id: 'DM', text: 'Dominica'},
            { id: 'DO', text: 'Dominican Republic'},
            { id: 'EC', text: 'Ecuador'},
            { id: 'EG', text: 'Egypt'},
            { id: 'SV', text: 'El Salvador'},
            { id: 'GQ', text: 'Equatorial Guinea'},
            { id: 'ER', text: 'Eritrea'},
            { id: 'EE', text: 'Estonia'},
            { id: 'ET', text: 'Ethiopia'},
            { id: 'FK', text: 'Falkland Islands (Malvinas)'},
            { id: 'FO', text: 'Faroe Islands'},
            { id: 'FJ', text: 'Fiji'},
            { id: 'FI', text: 'Finland'},
            { id: 'FR', text: 'France'},
            { id: 'GF', text: 'French Guiana'},
            { id: 'PF', text: 'French Polynesia'},
            { id: 'TF', text: 'French Southern Territories'},
            { id: 'GA', text: 'Gabon'},
            { id: 'GM', text: 'Gambia'},
            { id: 'GE', text: 'Georgia'},
            { id: 'DE', text: 'Germany'},
            { id: 'GH', text: 'Ghana'},
            { id: 'GI', text: 'Gibraltar'},
            { id: 'GR', text: 'Greece'},
            { id: 'GL', text: 'Greenland'},
            { id: 'GD', text: 'Grenada'},
            { id: 'GP', text: 'Guadeloupe'},
            { id: 'GU', text: 'Guam'},
            { id: 'GT', text: 'Guatemala'},
            { id: 'GG', text: 'Guernsey'},
            { id: 'GN', text: 'Guinea'},
            { id: 'GW', text: 'Guinea-Bissau'},
            { id: 'GY', text: 'Guyana'},
            { id: 'HT', text: 'Haiti'},
            { id: 'HM', text: 'Heard Island & Mcdonald Islands'},
            { id: 'VA', text: 'Holy See (Vatican City State)'},
            { id: 'HN', text: 'Honduras'},
            { id: 'HK', text: 'Hong Kong'},
            { id: 'HU', text: 'Hungary'},
            { id: 'IS', text: 'Iceland'},
            { id: 'IN', text: 'India'},
            { id: 'ID', text: 'Indonesia'},
            { id: 'IR', text: 'Iran}, Islamic Republic Of'},
            { id: 'IQ', text: 'Iraq'},
            { id: 'IE', text: 'Ireland'},
            { id: 'IM', text: 'Isle Of Man'},
            { id: 'IL', text: 'Israel'},
            { id: 'IT', text: 'Italy'},
            { id: 'JM', text: 'Jamaica'},
            { id: 'JP', text: 'Japan'},
            { id: 'JE', text: 'Jersey'},
            { id: 'JO', text: 'Jordan'},
            { id: 'KZ', text: 'Kazakhstan'},
            { id: 'KE', text: 'Kenya'},
            { id: 'KI', text: 'Kiribati'},
            { id: 'KR', text: 'Korea'},
            { id: 'KW', text: 'Kuwait'},
            { id: 'KG', text: 'Kyrgyzstan'},
            { id: 'LA', text: 'Lao People\'s Democratic Republic'},
            { id: 'LV', text: 'Latvia'},
            { id: 'LB', text: 'Lebanon'},
            { id: 'LS', text: 'Lesotho'},
            { id: 'LR', text: 'Liberia'},
            { id: 'LY', text: 'Libyan Arab Jamahiriya'},
            { id: 'LI', text: 'Liechtenstein'},
            { id: 'LT', text: 'Lithuania'},
            { id: 'LU', text: 'Luxembourg'},
            { id: 'MO', text: 'Macao'},
            { id: 'MK', text: 'Macedonia'},
            { id: 'MG', text: 'Madagascar'},
            { id: 'MW', text: 'Malawi'},
            { id: 'MY', text: 'Malaysia'},
            { id: 'MV', text: 'Maldives'},
            { id: 'ML', text: 'Mali'},
            { id: 'MT', text: 'Malta'},
            { id: 'MH', text: 'Marshall Islands'},
            { id: 'MQ', text: 'Martinique'},
            { id: 'MR', text: 'Mauritania'},
            { id: 'MU', text: 'Mauritius'},
            { id: 'YT', text: 'Mayotte'},
            { id: 'MX', text: 'Mexico'},
            { id: 'FM', text: 'Micronesia}, Federated States Of'},
            { id: 'MD', text: 'Moldova'},
            { id: 'MC', text: 'Monaco'},
            { id: 'MN', text: 'Mongolia'},
            { id: 'ME', text: 'Montenegro'},
            { id: 'MS', text: 'Montserrat'},
            { id: 'MA', text: 'Morocco'},
            { id: 'MZ', text: 'Mozambique'},
            { id: 'MM', text: 'Myanmar'},
            { id: 'NA', text: 'Namibia'},
            { id: 'NR', text: 'Nauru'},
            { id: 'NP', text: 'Nepal'},
            { id: 'NL', text: 'Netherlands'},
            { id: 'AN', text: 'Netherlands Antilles'},
            { id: 'NC', text: 'New Caledonia'},
            { id: 'NZ', text: 'New Zealand'},
            { id: 'NI', text: 'Nicaragua'},
            { id: 'NE', text: 'Niger'},
            { id: 'NG', text: 'Nigeria'},
            { id: 'NU', text: 'Niue'},
            { id: 'NF', text: 'Norfolk Island'},
            { id: 'MP', text: 'Northern Mariana Islands'},
            { id: 'NO', text: 'Norway'},
            { id: 'OM', text: 'Oman'},
            { id: 'PK', text: 'Pakistan'},
            { id: 'PW', text: 'Palau'},
            { id: 'PS', text: 'Palestinian Territory}, Occupied'},
            { id: 'PA', text: 'Panama'},
            { id: 'PG', text: 'Papua New Guinea'},
            { id: 'PY', text: 'Paraguay'},
            { id: 'PE', text: 'Peru'},
            { id: 'PH', text: 'Philippines'},
            { id: 'PN', text: 'Pitcairn'},
            { id: 'PL', text: 'Poland'},
            { id: 'PT', text: 'Portugal'},
            { id: 'PR', text: 'Puerto Rico'},
            { id: 'QA', text: 'Qatar'},
            { id: 'RE', text: 'Reunion'},
            { id: 'RO', text: 'Romania'},
            { id: 'RU', text: 'Russian Federation'},
            { id: 'RW', text: 'Rwanda'},
            { id: 'BL', text: 'Saint Barthelemy'},
            { id: 'SH', text: 'Saint Helena'},
            { id: 'KN', text: 'Saint Kitts And Nevis'},
            { id: 'LC', text: 'Saint Lucia'},
            { id: 'MF', text: 'Saint Martin'},
            { id: 'PM', text: 'Saint Pierre And Miquelon'},
            { id: 'VC', text: 'Saint Vincent And Grenadines'},
            { id: 'WS', text: 'Samoa'},
            { id: 'SM', text: 'San Marino'},
            { id: 'ST', text: 'Sao Tome And Principe'},
            { id: 'SA', text: 'Saudi Arabia'},
            { id: 'SN', text: 'Senegal'},
            { id: 'RS', text: 'Serbia'},
            { id: 'SC', text: 'Seychelles'},
            { id: 'SL', text: 'Sierra Leone'},
            { id: 'SG', text: 'Singapore'},
            { id: 'SK', text: 'Slovakia'},
            { id: 'SI', text: 'Slovenia'},
            { id: 'SB', text: 'Solomon Islands'},
            { id: 'SO', text: 'Somalia'},
            { id: 'ZA', text: 'South Africa'},
            { id: 'GS', text: 'South Georgia And Sandwich Isl.'},
            { id: 'ES', text: 'Spain'},
            { id: 'LK', text: 'Sri Lanka'},
            { id: 'SD', text: 'Sudan'},
            { id: 'SR', text: 'Suriname'},
            { id: 'SJ', text: 'Svalbard And Jan Mayen'},
            { id: 'SZ', text: 'Swaziland'},
            { id: 'SE', text: 'Sweden'},
            { id: 'CH', text: 'Switzerland'},
            { id: 'SY', text: 'Syrian Arab Republic'},
            { id: 'TW', text: 'Taiwan'},
            { id: 'TJ', text: 'Tajikistan'},
            { id: 'TZ', text: 'Tanzania'},
            { id: 'TH', text: 'Thailand'},
            { id: 'TL', text: 'Timor-Leste'},
            { id: 'TG', text: 'Togo'},
            { id: 'TK', text: 'Tokelau'},
            { id: 'TO', text: 'Tonga'},
            { id: 'TT', text: 'Trinidad And Tobago'},
            { id: 'TN', text: 'Tunisia'},
            { id: 'TR', text: 'Turkey'},
            { id: 'TM', text: 'Turkmenistan'},
            { id: 'TC', text: 'Turks And Caicos Islands'},
            { id: 'TV', text: 'Tuvalu'},
            { id: 'UG', text: 'Uganda'},
            { id: 'UA', text: 'Ukraine'},
            { id: 'AE', text: 'United Arab Emirates'},
            { id: 'GB', text: 'United Kingdom'},
            { id: 'US', text: 'United States'},
            { id: 'UM', text: 'United States Outlying Islands'},
            { id: 'UY', text: 'Uruguay'},
            { id: 'UZ', text: 'Uzbekistan'},
            { id: 'VU', text: 'Vanuatu'},
            { id: 'VE', text: 'Venezuela'},
            { id: 'VN', text: 'Viet Nam'},
            { id: 'VG', text: 'Virgin Islands}, British'},
            { id: 'VI', text: 'Virgin Islands}, U.S.'},
            { id: 'WF', text: 'Wallis And Futuna'},
            { id: 'EH', text: 'Western Sahara'},
            { id: 'YE', text: 'Yemen'},
            { id: 'ZM', text: 'Zambia'},
            { id: 'ZW', text: 'Zimbabwe'}
        ];

        function formatCountry (country) {
            if (!country.id) { return country.text; }
            var $country = $(
                '<span class="flag-icon flag-icon-'+ country.id.toLowerCase() +' flag-icon-squared"></span>' +
                '<span class="flag-text">'+ country.text+"</span>"
            );
            return $country;
        };

        jQuery("[name='country']").select2({
            placeholder: "Select a country",
            templateSelection: formatCountry,
            templateResult: formatCountry,
            data: isoCountries
        }).on('select2:opening', function(e) {
            $(this).data('select2').$dropdown.find(':input.select2-search__field').attr('placeholder', 'Quick Find')
        });

        var isoShiping = [
            { id: 'US', curency: '$', price:'12.43'},
            { id: 'UA', curency: '&#8372;', price:'12.43'},
            { id: 'RU', curency: '&#8381;', price:'12.43'},
        ]

        function formatSiping (country) {
            if (!country.id) { return country.curency + country.price; }
            let priceArr = country.price.split('.');
            var $country = $(
                '<div class="siping-option">' + country.id + ' ' + country.curency + '<span>' + priceArr[0] + '</span>.' + priceArr[1] + '</div>'
            );
            return $country;
        }

        $("[name='shiping']").select2({
            placeholder: "Select a country",
            templateSelection: formatSiping,
            templateResult: formatSiping,
            data: isoShiping
        })

        $(".my-select2").select2().on('select2:opening', function(e) {
            $(this).data('select2').$dropdown.find(':input.select2-search__field').attr('placeholder', 'Quick Find')
        });

        console.log('f_b_0');
        jQuery(document).on('click', '.footer__button', function () {
            console.log('f_b');
            jQuery(this).toggleClass("active")
            jQuery('.footer__body').slideToggle(200)
        });

        $('#carousel').flexslider({
            animation: "slide",
            direction: "vertical",
            nextText: "",
            prevText: "",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 210,
            itemMargin: 5,
            asNavFor: '#slider'
        });

        $('#slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            directionNav: false,
            slideshow: false,
            itemWidth: 652,
            sync: "#carousel"
        });

        $('.product-page__choose-item').click(function(){
            var dataValue = $(this).attr('data-value');
            $(this).parent().find('.active').removeClass('active');
            $(this).addClass('active');
            $(this).closest('.product-page__choose').find('.choose-text').text(dataValue);
        })

        $('.spoiler-item__content').show();
        $('.spoiler-item__header').on('click',function (e) {
            e.preventDefault()
            $(this).parent('.spoiler-item').toggleClass("active").find('.spoiler-item__content').slideToggle(300);
            if($(this).parent('.spoiler-item').hasClass('active')){
                $(this).parent('.spoiler-item').find('.more > span').text('Less')
            } else {
                $(this).find('.more > span').text('More')
            }
        })
        if ($(".popup-slilder").length) {
            $(".popup-slilder").slick({
                dots: false,
                arrows: true,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 1,
                prevArrow: '<button type="button" class="slick-prev"><img src="/wp-content/themes/best-of-shop/assets/img/svg/sl-arrow-left-big.svg" alt=""></button>',
                nextArrow: '<button type="button" class="slick-next"><img src="/wp-content/themes/best-of-shop/assets/img/svg/sl-arrow-right-big.svg" alt=""></button>',
                responsive: [
                    {
                        breakpoint: 875,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 680,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 500,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        },
                    },
                ],
            });
        }
        function initPupup(btn, id) {
            $(btn).click(function (evt) {
                evt.preventDefault();
                $(id).addClass('active');
                $('body').addClass('ovh');
            });
        }
        initPupup('.add-to-card-btn','#add-to-card');
        initPupup('.popup-login','#login-popup');
        initPupup('.popup-shipping','#popup-shipping');
        initPupup('.popup-sizes-btn','#popup-sizes');
        initPupup('.popup-share','#popup-share');


        $('.mob_search_btn a').click(function(){
            $('.header__search-wrpr').toggleClass('active');
            return false;
        })

        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 150) {
                $(".header").addClass("header_sm");
            } else {
                $(".header").removeClass("header_sm");
            }
        });
        $('#payment-method').click(function(){
            $(this).closest('.methods-table').css('display', 'none')
            $('.payment-method[data-id="payment-method"]').addClass('open')
        })
        $('.add-new-adress-btn').click(function(){
            $(this).closest('.adress-list').css('display', 'none')
            $('.adress-add-new').addClass('open')
        });

        $('.header_mob_tabs_trigger').click(function(){
            $('.header_mob_tabs_trigger').removeClass('current_tab');
            $(this).addClass('current_tab');

            let tabTrigger = $(this).data('tab');

            $('.header_tab').removeClass('current');
            $('.header_tab.'+tabTrigger).addClass('current');

            return false;
        })

        $('.search__current').click(function(){
            $(this).addClass('active');
            $('.search__dropdown').slideToggle(200)
        })
        $('.category-search__item').click(function(){
            $('.category-search__item').removeClass('current');
            $(this).addClass('current');
            $('.search__current').text($(this).text());
            $('.search__dropdown').slideUp(200)
        })
    });
})(jQuery)
