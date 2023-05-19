
$(document).ready(function () {
    var contact_p_a = $('.contact-card p a');
    contact_p_a.addClass('footer-underline');
})

$(document).ready(function(){

    $('.hamburger').on('click', function (e) {
        e.preventDefault();
        $('.hamburger').css('pointer-events', 'none');
        if($('.bg-light-grey').hasClass('full-height-mob-nav')){
            $('.bg-light-grey').removeClass('full-height-mob-nav');
        }else{
            $('.bg-light-grey').addClass('full-height-mob-nav');
        }
        var mobile_nav_section = $('#mobile-nav-section');
        var chevron_left = $('.main-image-slider .slick-prev');
        var hamburger = $('.hamburger-inner, .hamburger-inner::before, .hamburger-inner::after');
        if(mobile_nav_section.hasClass('collapsed-hamburger')){
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
        }else{
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

        if($(this).hasClass('is-active')){
            $('.page-content-to-remove').css('display', 'none');
            $('footer').css('display', 'none');
        }else{
            $('.page-content-to-remove').css('display', 'block');
            $('footer').css('display', 'block');
        }
    });
})

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
var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};
var hamburgers = document.querySelectorAll(".hamburger");
if (hamburgers.length > 0) {
    forEach(hamburgers, function(hamburger) {
        hamburger.addEventListener("click", function() {
            this.classList.toggle("is-active");
        }, false);
    });
}

$(document).ready(function() {
    $("#mobile-group-dropdown-button").on('click',function(event){
        $('#mobile-nav-section').animate({scrollTop: '+=400px'}, 800);
    });
});

(function($){
    $(document).ready(function(){
        $("#example-dropdown").on('hover', function() {
            $(".button-light").toggleClass("hover");
        });

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
                $('#mobile-group-dropdown').css({'display' : 'block', 'left' : '96.6563px'});
                // $('#mobile-group-dropdown').css({'display' : 'block', 'top' : '458.594px', 'left' : '96.6563px'});
            }else{
                $(this).addClass('hover');
                $(this).attr('aria-expanded', 'true');
                $('#mobile-group-dropdown').addClass('is-open');
                $('#mobile-group-dropdown').attr('aria-hidden', 'false');
                $('#mobile-group-dropdown').css({'display' : 'block', 'left' : '96.6563px'});
                // $('#mobile-group-dropdown').css({'display' : 'block', 'top' : '458.594px', 'left' : '96.6563px'});
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
