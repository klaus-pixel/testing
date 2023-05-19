

$(document).ready();
$(document).ready(function(){

    $('.first-grupperselskaber-mobile-slide').css('background', 'none');

    $('.gallery').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });
    $('.main-image-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });
	
	if($(window).width() < 401){
		$('.releases-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });
    } else {
		$('.releases-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1
    });
	}
	
	

	
    $('.gruppeselskaber-mobile-slider').slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots : true,
    });

    $('#hamburger').on('click', function () {
        $('.grupperselskaber-logo').css('z-index', '0');
    });
    $('#active-hamburger').on('click', function () {
        $('.grupperselskaber-logo').css('z-index', '1');
    });


    $('.hamburger').on('click', function (e) {
        e.preventDefault();
        $('.hamburger').css('pointer-events', 'none');
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
            hamburger.css('background', '#fff');

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
        }
    });

    $('.gruppeselskaber-mobile-slider .slick-dots li button').addClass('light-dots');

    if($(window).width() < 920){
        $('#mobile-slider-posts').removeClass('grey-nav');
        $('#mobile-slider-posts').addClass('white-nav');
    }

    $(".gruppeselskaber-mobile-slider").on("afterChange", function (event, slick, currentSlide, nextSlide){
        if(currentSlide === 2 || currentSlide === 3){
            $('.gruppeselskaber-mobile-slider .slick-dots li button').addClass('dark-dots');
        }else{
            $('.gruppeselskaber-mobile-slider .slick-dots li button').removeClass('dark-dots');
            $('.gruppeselskaber-mobile-slider .slick-dots li button').addClass('light-dots');
        }
    });



    $(".gruppeselskaber-mobile-slider").on("afterChange", function (event, slick, currentSlide, nextSlide){

        if(currentSlide === 1){
            $('.slick-track').css('display','block');
            $('.slick-track').removeClass('bg-white');
            $(this).removeClass('bg-white');
            // $('.slick-slider').css('height', '115%');

        }else if(currentSlide === 2){
            $('.slick-slider').css('height', '100%');
            $('.slick-track').css('display','table');
            $('.slick-track').addClass('bg-white');
            $(this).addClass('bg-white');

        }else{
            $('.slick-slider').css('height', '100%');
            $('.slick-track').css('display', 'block');
            $('.slick-track').removeClass('bg-white');
            $(this).removeClass('bg-white');
        }



        if(currentSlide === 3){
            $('.slick-slide').css('height', '115%');
            if($('#row-count').val() === '2' || $('#row-count').val() === '1'){

                $('.slick-track').css('display','block');
            }else{
                $('.slick-track').css('display','table');
            }
        }else{
            $('.slick-slide').css('height', '100%');
        }

    });

    // $('*[data-slick-index="2"]').addClass('bg-white');

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

