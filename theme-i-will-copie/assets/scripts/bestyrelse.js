
$(document).ready(function () {
    var dropdown_li_a = $('.dropdown li a');
    dropdown_li_a.addClass('underline');
})

$(document).ready(function () {

    $('.bestyrelse-member').on('click', function () {
        $('.click-for-more-info-text').fadeOut();
    });


    var member_button_1 = $('#bestyrelse-member-button-1');
    var member_button_2 = $('#bestyrelse-member-button-2');
    var member_button_3 = $('#bestyrelse-member-button-3');
    var member_button_4 = $('#bestyrelse-member-button-4');
    var member_button_5 = $('#bestyrelse-member-button-5');
    var member_button_6 = $('#bestyrelse-member-button-6');
	var member_button_7 = $('#bestyrelse-member-button-7');
    var member_buttons_all = $('#bestyrelse-member-button-1,#bestyrelse-member-button-2,#bestyrelse-member-button-3,#bestyrelse-member-button-4,#bestyrelse-member-button-5,#bestyrelse-member-button-6,#bestyrelse-member-button-7');

    var name_1 = $('.bestyrelse-name-1');
    var occupation_1 = $('.bestyrelse-occupation-1');
    var name_2 = $('.bestyrelse-name-2');
    var occupation_2 = $('.bestyrelse-occupation-2');
    var name_3 = $('.bestyrelse-name-3');
    var occupation_3 = $('.bestyrelse-occupation-3');
    var name_4 = $('.bestyrelse-name-4');
    var occupation_4 = $('.bestyrelse-occupation-4');
    var name_5 = $('.bestyrelse-name-5');
    var occupation_5 = $('.bestyrelse-occupation-5');
    var name_6 = $('.bestyrelse-name-6');
    var occupation_6 = $('.bestyrelse-occupation-6');
    var name_7 = $('.bestyrelse-name-7');
    var occupation_7 = $('.bestyrelse-occupation-7');

    $('#bestyrelse-member-1').on('click', function () {
        $(member_buttons_all).not(member_button_1).addClass('button-bestyrelse--hide-instantly');
        setTimeout(function () {
            $(member_buttons_all).removeClass('button-bestyrelse--hide-instantly');
        }, 1000);

        $(member_buttons_all).removeClass('button-bestyrelse--visible');
        $(member_buttons_all).removeClass('button-bestyrelse--visible-content');

        member_button_1.addClass('button-bestyrelse--visible');

        setTimeout(function () {
            member_button_1.addClass('button-bestyrelse--visible-content');
        }, 500);
    });

    $('#bestyrelse-member-2').on('click', function () {
        $(member_buttons_all).not(member_button_2).addClass('button-bestyrelse--hide-instantly');
        setTimeout(function () {
            $(member_buttons_all).removeClass('button-bestyrelse--hide-instantly');
        }, 1000);


        $(member_buttons_all).removeClass('button-bestyrelse--visible');
        $(member_buttons_all).removeClass('button-bestyrelse--visible-content');

        member_button_2.addClass('button-bestyrelse--visible');

        setTimeout(function () {
            member_button_2.addClass('button-bestyrelse--visible-content');
        }, 500);
    });

    $('#bestyrelse-member-3').on('click', function () {
        $(member_buttons_all).not(member_button_3).addClass('button-bestyrelse--hide-instantly');
        setTimeout(function () {
            $(member_buttons_all).removeClass('button-bestyrelse--hide-instantly');
        }, 1000);


        $(member_buttons_all).removeClass('button-bestyrelse--visible');
        $(member_buttons_all).removeClass('button-bestyrelse--visible-content');

        member_button_3.addClass('button-bestyrelse--visible');

        setTimeout(function () {
            member_button_3.addClass('button-bestyrelse--visible-content');
        }, 500);
    });

    $('#bestyrelse-member-4').on('click', function () {
        $(member_buttons_all).not(member_button_4).addClass('button-bestyrelse--hide-instantly');
        setTimeout(function () {
            $(member_buttons_all).removeClass('button-bestyrelse--hide-instantly');
        }, 1000);


        $(member_buttons_all).removeClass('button-bestyrelse--visible');
        $(member_buttons_all).removeClass('button-bestyrelse--visible-content');

        member_button_4.addClass('button-bestyrelse--visible');

        setTimeout(function () {
            member_button_4.addClass('button-bestyrelse--visible-content');
        }, 500);
    });

    $('#bestyrelse-member-5').on('click', function () {
        $(member_buttons_all).not(member_button_5).addClass('button-bestyrelse--hide-instantly');
        setTimeout(function () {
            $(member_buttons_all).removeClass('button-bestyrelse--hide-instantly');
        }, 1000);


        $(member_buttons_all).removeClass('button-bestyrelse--visible');
        $(member_buttons_all).removeClass('button-bestyrelse--visible-content');

        member_button_5.addClass('button-bestyrelse--visible');

        setTimeout(function () {
            member_button_5.addClass('button-bestyrelse--visible-content');
        }, 500);
    });

    $('#bestyrelse-member-6').on('click', function () {
        $(member_buttons_all).not(member_button_6).addClass('button-bestyrelse--hide-instantly');
        setTimeout(function () {
            $(member_buttons_all).removeClass('button-bestyrelse--hide-instantly');
        }, 1000);


        $(member_buttons_all).removeClass('button-bestyrelse--visible');
        $(member_buttons_all).removeClass('button-bestyrelse--visible-content');

        member_button_6.addClass('button-bestyrelse--visible');

        setTimeout(function () {
            member_button_6.addClass('button-bestyrelse--visible-content');
        }, 500);
    });
	
    $('#bestyrelse-member-7').on('click', function () {
        $(member_buttons_all).not(member_button_7).addClass('button-bestyrelse--hide-instantly');
        setTimeout(function () {
            $(member_buttons_all).removeClass('button-bestyrelse--hide-instantly');
        }, 1000);


        $(member_buttons_all).removeClass('button-bestyrelse--visible');
        $(member_buttons_all).removeClass('button-bestyrelse--visible-content');

        member_button_7.addClass('button-bestyrelse--visible');

        setTimeout(function () {
            member_button_7.addClass('button-bestyrelse--visible-content');
        }, 500);
    });
	
});

$(document).ready(function () {
    // $('.hidden-class').fadeIn(3000).removeClass('hidden-class');

    $('.hamburger').on('click', function (e) {
        e.preventDefault();
        $('.hamburger').css('pointer-events', 'none');
        if ($('.bg-light-grey').hasClass('full-height-mob-nav')) {
            $('.bg-light-grey').removeClass('full-height-mob-nav');
        } else {
            $('.bg-light-grey').addClass('full-height-mob-nav');
        }
        var mobile_nav_section = $('#mobile-nav-section');
        var chevron_left = $('.main-image-slider .slick-prev');
        var hamburger = $('.hamburger-inner, .hamburger-inner::before, .hamburger-inner::after');
        if (mobile_nav_section.hasClass('collapsed-hamburger')) {
            mobile_nav_section.addClass('expanded-hamburger');
            mobile_nav_section.removeClass('collapsed-hamburger');
            mobile_nav_section.addClass('slideInUp');
            mobile_nav_section.removeClass('slideAway');
            mobile_nav_section.css('display', 'block');
            chevron_left.attr('style', 'z-index: 0 !important');
            hamburger.addClass('force-light-hamburger');

            $('#hamburger').fadeOut(300);
            $('#active-hamburger').fadeIn(300);
            $('#active-hamburger').addClass('is-active');
            setTimeout(function (){
                $('.hamburger').css('pointer-events', 'auto');
            }, 500)
        } else {
            mobile_nav_section.removeClass('expanded-hamburger');
            mobile_nav_section.addClass('collapsed-hamburger');
            mobile_nav_section.removeClass('slideInUp');
            mobile_nav_section.addClass('slideAway');
            setTimeout(function () {
                chevron_left.attr('style', 'z-index: 1 !important');
            }, 100);
            hamburger.removeClass('force-light-hamburger');
            mobile_nav_section.fadeOut(500);

            $('#hamburger').fadeIn(300);
            $('#hamburger').removeClass('is-active');
            $('#active-hamburger').fadeOut(300);
            setTimeout(function (){
                $('.hamburger').css('pointer-events', 'auto');
            }, 500)
        }

        if ($(this).hasClass('is-active')) {
            $('.page-content-to-remove').css('display', 'none');
            $('footer').css('display', 'none');
        } else {
            $('.page-content-to-remove').css('display', 'block');
            $('footer').css('display', 'block');
        }

    });
});

$(document).ready(function() {
    $("#mobile-group-dropdown-button").on('click',function(event){
        $('#mobile-nav-section').animate({scrollTop: '+=400px'}, 800);
    });
});

/**
 * forEach implementation for Objects/NodeLists/Arrays, automatic type loops and context options
 *
 * @private
 * @author Todd Motto
 * @link https://github.com/toddmotto/foreach
 * @param {Array|Object|NodeList} collection - Collection of items to iterate, could be an Array, Object or NodeList
 * @callback requestCallback      callback   - Callback function for each iteration.
 * @param {Array|Object|NodeList} scope=null - Object/NodeList/Array that forEach is iterating over, to use as the this value when executing callback.
 * @returns {}
 */
var forEach = function (t, o, r) {
    if ("[object Object]" === Object.prototype.toString.call(t)) for (var c in t) Object.prototype.hasOwnProperty.call(t, c) && o.call(r, t[c], c, t); else for (var e = 0, l = t.length; l > e; e++) o.call(r, t[e], e, t)
};
var hamburgers = document.querySelectorAll(".hamburger");
if (hamburgers.length > 0) {
    forEach(hamburgers, function (hamburger) {
        hamburger.addEventListener("click", function () {
            this.classList.toggle("is-active");
        }, false);
    });
}

(function($){
    $(document).ready(function(){
        $("#example-dropdown").on('hover', function() {
            $(".button-light").toggleClass("hover");
        });

        // var dropdown_li_a = $('.dropdown li a');
        // dropdown_li_a.addClass('underline');
        $('.footer .medium-container .textwidget a[href*="tel:"]').each(function() {
            $(this).addClass('footer-underline');
            $(this).css('width', '142px');
        });

        $('#desktop-group-dropdown').mouseenter(function () {
            $(this).addClass('hover');
            $(this).attr('aria-expanded', 'true');
            $('#example-dropdown').addClass('is-open');
            $('#example-dropdown').attr('aria-hidden', 'false');
        });
        $('#desktop-group-dropdown').mouseleave(function () {
            $(this).removeClass('hover');
            $(this).attr('aria-expanded', 'false');
            $('#example-dropdown').removeClass('is-open');
            $('#example-dropdown').attr('aria-hidden', 'true');
        });
        $('#example-dropdown').mouseenter(function () {
            $('.button-grey').addClass('hover');
            $('.button-grey').attr('aria-expanded', 'true');
            $('#example-dropdown').addClass('is-open');
            $('#example-dropdown').attr('aria-hidden', 'false');
        });
        $('#example-dropdown').mouseleave(function () {
            $('.button-grey').removeClass('hover');
            $('.button-grey').attr('aria-expanded', 'false');
            $('#example-dropdown').removeClass('is-open');
            $('#example-dropdown').attr('aria-hidden', 'true');
        });

        $('#mobile-group-dropdown-button').on('click', function () {
            if($(this).hasClass('hover')){
                $(this).removeClass('hover');
                $(this).attr('aria-expanded', 'false');
                $('#mobile-group-dropdown').removeClass('is-open');
                $('#mobile-group-dropdown').attr('aria-hidden', 'false');
                // $('#mobile-group-dropdown').css({'display' : 'block', 'top' : '458.594px', 'left' : '96.6563px'});
                $('#mobile-group-dropdown').css({'display' : 'block', 'left' : '96.6563px'});
            }else{
                $(this).addClass('hover');
                $(this).attr('aria-expanded', 'true');
                $('#mobile-group-dropdown').addClass('is-open');
                $('#mobile-group-dropdown').attr('aria-hidden', 'false');
                // $('#mobile-group-dropdown').css({'display' : 'block', 'top' : '458.594px', 'left' : '96.6563px'});
                $('#mobile-group-dropdown').css({'display' : 'block', 'left' : '96.6563px'});
            }
        });

        $('.accordion-item').on('click', function () {
            if($(this).hasClass('is-active')){
                $(this).removeClass('is-active');
                $(this).find('.accordion-title').attr('aria-expanded', 'false');
                $(this).find('.accordion-title').attr('aria-selected', 'false');
                $(this).find('.accordion-content').css('display', 'none');
            }else{
                $(this).addClass('is-active');
                $(this).find('.accordion-title').attr('aria-expanded', 'true');
                $(this).find('.accordion-title').attr('aria-selected', 'true');
                $(this).find('.accordion-content').css('display', 'block');
            }
        });
    });
})(jQuery);
