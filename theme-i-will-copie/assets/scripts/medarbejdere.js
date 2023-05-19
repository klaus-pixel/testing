
$(document).ready(function () {
    var dropdown_li_a = $('.dropdown li a');
    dropdown_li_a.addClass('underline');
})

$(document).ready(function(){

    // $('.hidden-class').fadeIn(3000).removeClass('hidden-class');

    $('.slider-section').slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $('.medarbejdere-image-is-active-wrapper').find('.medarbejdere-image').addClass('remove-red-overlay');

    $('.medarbejdere-image-is-active').find('.medarbejder-description').css('display', 'none');
    $('.mobile-medarbejdere-image-is-active').find('.mobile-medarbejder-description').css('display', 'block');
    // $('.medarbejdere-image-is-active').find('.plus').css({'top' : '42%', 'left' : '48%'});

    $('.medarbejdere-image-wrapper').mouseenter(function () {
        if(!$(this).hasClass('medarbejdere-image-is-active-wrapper')){
            $(this).find('.plus:first').fadeIn(500);
        }

    });
    $('.medarbejdere-image-wrapper').mouseleave(function () {
        $(this).find('.plus:first').fadeOut(100);
    });

    $('.medarbejdere-image-wrapper').on('click', function () {
        if($(this).hasClass('medarbejdere-image-is-active-wrapper')){
            // $(this).removeClass('medarbejdere-image-is-active-wrapper');
            // $(this).find('.medarbejdere-image:first').removeClass('medarbejdere-image-is-active');
            // $(this).find('.medarbejder-description:first').css('display', 'none');
            // $(this).find('.plus:first').css({'top' : '38%', 'left' : '42%'});
            // $(this).find('.medarbejdere-image:first').removeClass('remove-red-overlay');
            // $(this).find('.medarbejdere-image:first').find('.plus:first').fadeIn(100);

            // if(midScreenSize()){
            //     $(this).animate({width:'60px'}, 800);
            //     $(this).find('.medarbejdere-image:first').animate({height: '90px'},800);
            // }else{
            //     $(this).animate({width:'88px'}, 800);
            //     $(this).find('.medarbejdere-image:first').animate({height: '134px'},800);
            // }
        }else{
            $(this).addClass('medarbejdere-image-is-active-wrapper');
            $(this).find('.medarbejdere-image:first').addClass('medarbejdere-image-is-active');
            $(this).find('.medarbejder-description:first').css('display', 'none');
            // $(this).find('.plus:first').css({'top' : '42%', 'left' : '48%'});

            $(this).find('.medarbejdere-image:first').addClass('remove-red-overlay');
            $(this).find('.medarbejdere-image:first').find('.plus:first').fadeOut(100);

            if(midScreenSize()){
                $(this).animate({width: '150px'},800);
                $(this).find('.medarbejdere-image:first').animate({height:'150px'});
            }else{
                $(this).animate({width: '195px'},800);
                $(this).find('.medarbejdere-image:first').animate({height:'196px'});
            }
        }
    });

    $('.mobile-medarbejdere-image-wrapper').on('click', function () {
        if($(this).hasClass('mobile-medarbejdere-image-is-active-wrapper')){
            // $(this).removeClass('mobile-medarbejdere-image-is-active-wrapper');
            // $(this).find('.mobile-medarbejdere-image:first').removeClass('mobile-medarbejdere-image-is-active');
            // $(this).find('.mobile-medarbejder-description:first').css('display', 'none');
            // $(this).find('.mobile-plus:first').css({'display':'block', 'top' : '1%', 'left' : '9%'});
        }else{
            $(this).addClass('mobile-medarbejdere-image-is-active-wrapper');
            $(this).find('.mobile-medarbejdere-image:first').addClass('mobile-medarbejdere-image-is-active');
            $(this).find('.mobile-medarbejder-description:first').css('display', 'block');
            $(this).find('.mobile-plus:first').css({'display' : 'none'});
        }
    });

    /**
     * Image positioning check when clicked
     */
    var image_1 = $('#medarbejdere-image-1');
    var image_2 = $('#medarbejdere-image-2');
    var image_3 = $('#medarbejdere-image-3');
    var image_4 = $('#medarbejdere-image-4');
    var image_5 = $('#medarbejdere-image-5');
    var image_6 = $('#medarbejdere-image-6');
    var image_7 = $('#medarbejdere-image-7');
    var image_8 = $('#medarbejdere-image-8');
    var image_9 = $('#medarbejdere-image-9');
    var image_10 = $('#medarbejdere-image-10');
    var image_11 = $('#medarbejdere-image-11');
    var image_12 = $('#medarbejdere-image-12');
    var image_14 = $('#medarbejdere-image-14');

    function midScreenSize()
    {
        if($(window).width() > 920 && $(window).width() < 1220){
            return true;
        }else{
            return false;
        }
    }


    image_1.on('click', function () {
        if($(this).hasClass('medarbejdere-image-is-active-wrapper')){
            // image_2.removeClass('medarbejdere-image-is-active-wrapper');
            // image_2.find('.medarbejdere-image:first').removeClass('medarbejdere-image-is-active');
            // image_2.find('.medarbejder-description:first').css('display', 'none');
            image_2.animate({'top' : '35.5%', 'left' : '8.5%'},800);

            image_3.removeClass('medarbejdere-image-is-active-wrapper');
            image_3.find('.medarbejdere-image:first').removeClass('medarbejdere-image-is-active');
            image_3.find('.medarbejder-description:first').css('display', 'none');
            image_3.find('.medarbejdere-image:first').removeClass('remove-red-overlay');

            if(midScreenSize()){
                image_3.animate({width:'60px'}, 800);
                image_3.find('.medarbejdere-image:first').animate({height: '90px'},800);

                image_2.animate({width: '150px'}, 800);
                image_2.find('.medarbejdere-image:first').animate({height: '150px'},800);

                image_4.animate({top: '69%'}, 800);
            }else{
                image_3.animate({width:'88px'}, 800);
                image_3.find('.medarbejdere-image:first').animate({height: '134px'},800);

                image_4.animate({top: '69%'}, 800);
            }
        }else{
            // image_2.addClass('medarbejdere-image-is-active-wrapper');
            // image_2.find('.medarbejdere-image:first').addClass('medarbejdere-image-is-active');
            // image_2.find('.medarbejder-description:first').css('display', 'block');
            image_2.animate({'top' : '10%', 'left' : '8.5%'}, 800);

            image_4.animate({top: '67%'}, 800);
        }
    });

    image_2.on('click', function () {
        // if($(this).hasClass('mid-size')){
        //     $(this).removeClass('mid-size');
        // }else{
        //     $(this).animate({width: '150px'}, 800);
        //     $(this).addClass('mid-size');
        // }
        if($(this).hasClass('medarbejdere-image-is-active-wrapper')){
            image_3.removeClass('medarbejdere-image-is-active-wrapper');
            image_3.find('.medarbejdere-image:first').removeClass('medarbejdere-image-is-active');
            image_3.find('.medarbejder-description:first').css('display', 'none');

            if (midScreenSize()){
                $(this).animate({width: '60px'}, 800);
                $(this).find('.medarbejdere-image:first').animate({height: '90px'},800);
            }
        }
    });

    image_3.on('click', function () {
        if($(this).hasClass('medarbejdere-image-is-active-wrapper')){
            image_4.removeClass('medarbejdere-image-is-active-wrapper');
            image_4.find('.medarbejdere-image:first').removeClass('medarbejdere-image-is-active');
            image_4.find('.medarbejder-description:first').css('display', 'none');

            image_1.removeClass('medarbejdere-image-is-active-wrapper');
            image_1.find('.medarbejdere-image:first').removeClass('medarbejdere-image-is-active');
            image_1.find('.medarbejder-description:first').css('display', 'none');
            image_1.find('.medarbejdere-image:first').removeClass('remove-red-overlay');
            image_1.animate({width:'88px'}, 800);
            image_1.find('.medarbejdere-image:first').animate({height: '134px'},800);
            image_2.animate({'top' : '7%', 'left' : '8.5%'},800);
            image_2.addClass('medarbejdere-image-is-active-wrapper');
            image_2.find('.medarbejdere-image:first').addClass('medarbejdere-image-is-active');
            image_2.find('.medarbejder-description:first').css('display', 'none');

            image_4.animate({width:'88px'}, 800);
            image_4.find('.medarbejdere-image:first').animate({height: '134px'},800);
            image_4.find('.medarbejdere-image:first').removeClass('remove-red-overlay');
        }
    });

    image_4.on('click', function () {
        if($(this).hasClass('medarbejdere-image-is-active-wrapper')){
            image_3.removeClass('medarbejdere-image-is-active-wrapper');
            image_3.find('.medarbejdere-image:first').removeClass('medarbejdere-image-is-active');
            image_3.find('.medarbejder-description:first').css('display', 'none');
            image_3.find('.medarbejdere-image:first').removeClass('remove-red-overlay');

            image_3.animate({width:'88px'}, 800);
            image_3.find('.medarbejdere-image:first').animate({height: '134px'},800);
        }
    });

    image_5.on('click', function () {
        if($(this).hasClass('medarbejdere-image-is-active-wrapper')){
            // $(this).animate({'top': '22%'},800);
            image_6.animate({'top' : '59.4%'},800);
        }else{
            // $(this).animate({'top' : '28%'},800);
            image_6.animate({'top' : '56.4%'},800);
        }
    });

    image_7.on('click', function () {
        if($(this).hasClass('medarbejdere-image-is-active-wrapper')){
            image_8.removeClass('medarbejdere-image-is-active-wrapper');
            image_8.find('.medarbejdere-image:first').removeClass('medarbejdere-image-is-active');
            image_8.find('.medarbejder-description:first').css('display', 'none');
            image_8.animate({width:'88px'}, 800);
            image_8.find('.medarbejdere-image:first').animate({height: '134px'},800);
            image_8.find('.medarbejdere-image:first').removeClass('remove-red-overlay');
        }else{
            image_8.addClass('medarbejdere-image-is-active-wrapper');
            image_8.find('.medarbejdere-image:first').addClass('medarbejdere-image-is-active');
            // image_8.find('.medarbejder-description:first').css('display', 'block');
        }
    });

    image_8.on('click', function () {
        // if($(this).hasClass('mid-size')){
        //     $(this).removeClass('mid-size');
        // }else{
        //     $(this).animate({width: '150px'}, 800);
        //     $(this).addClass('mid-size');
        // }

        if($(this).hasClass('medarbejdere-image-is-active-wrapper')){
            image_7.removeClass('medarbejdere-image-is-active-wrapper');
            image_7.find('.medarbejdere-image:first').removeClass('medarbejdere-image-is-active');
            image_7.find('.medarbejder-description:first').css('display', 'none');
            image_7.find('.medarbejdere-image:first').removeClass('remove-red-overlay');

            image_14.removeClass('medarbejdere-image-is-active-wrapper');
            image_14.find('.medarbejdere-image:first').removeClass('medarbejdere-image-is-active');
            image_14.find('.medarbejder-description:first').css('display', 'none');
            image_14.find('.medarbejdere-image:first').removeClass('remove-red-overlay');
            image_14.animate({'width' : '88px'}, 800);
            image_14.find('.medarbejdere-image:first').animate({'height' : '134px'});

            image_7.animate({width:'88px'}, 800);
            image_7.find('.medarbejdere-image:first').animate({height: '134px'},800);
        }else{
            image_7.addClass('medarbejdere-image-is-active-wrapper');
            image_7.find('.medarbejdere-image:first').addClass('medarbejdere-image-is-active');
            // image_7.find('.medarbejder-description:first').css('display', 'block');
        }
    });

    image_6.on('click', function () {
        if($(this).hasClass('mid-size')){
            $(this).removeClass('mid-size');
        }else{
            // $(this).animate({width: '150px'}, 800);
            $(this).addClass('mid-size');
        }

        if($(this).hasClass('medarbejdere-image-is-active-wrapper')){
            // image_9.removeClass('medarbejdere-image-is-active-wrapper');
            // image_9.find('.medarbejdere-image:first').removeClass('medarbejdere-image-is-active');
            // image_9.find('.medarbejder-description:first').css('display', 'none');
        }
    });

    image_9.on('click', function () {
        if($(this).hasClass('medarbejdere-image-is-active-wrapper')){
            // image_6.removeClass('medarbejdere-image-is-active-wrapper');
            // image_6.find('.medarbejdere-image:first').removeClass('medarbejdere-image-is-active');
            // image_6.find('.medarbejder-description:first').css('display', 'none');
        }else{
            image_6.addClass('medarbejdere-image-is-active-wrapper');
            image_6.find('.medarbejdere-image:first').addClass('medarbejdere-image-is-active');
            image_6.find('.medarbejder-description:first').css('display', 'block');
        }
    });

    image_11.on('click', function () {
        if($(this).hasClass('medarbejdere-image-is-active-wrapper')){
            image_10.animate({'top' : '64.8%'},800);
        }else{
            image_10.animate({'top' : '53.8%'},800);
        }
    });

    image_10.on('click', function () {
        if($(this).hasClass('mid-size')){
            $(this).removeClass('mid-size');
        }else{
            // $(this).animate({width: '150px'}, 800);
            $(this).addClass('mid-size');
        }
    });

    image_12.on('click', function(){
        if($(this).hasClass('mid-size')){
            $(this).removeClass('mid-size');
        }else{
            // $(this).animate({width: '150px'}, 800);
            $(this).addClass('mid-size');
        }
    });

    image_14.on('click', function () {
        if($(this).hasClass('medarbejdere-image-is-active-wrapper')){
            image_8.removeClass('medarbejdere-image-is-active-wrapper');
            image_8.find('.medarbejdere-image:first').removeClass('medarbejdere-image-is-active');
            image_8.find('.medarbejder-description:first').css('display', 'none');
            image_8.animate({width:'88px'}, 800);
            image_8.find('.medarbejdere-image:first').animate({height: '134px'},800);
        }
    });


    /**
     * Image positioning check when clicked on mobile
     */
    var mobile_image_1 = $('#mobile-medarbejdere-image-1');
    var mobile_image_2 = $('#mobile-medarbejdere-image-2');
    var mobile_image_3 = $('#mobile-medarbejdere-image-3');
    var mobile_image_4 = $('#mobile-medarbejdere-image-4');
    var mobile_image_5 = $('#mobile-medarbejdere-image-5');
    var mobile_image_6 = $('#mobile-medarbejdere-image-6');
    var mobile_image_7 = $('#mobile-medarbejdere-image-7');
    var mobile_image_8 = $('#mobile-medarbejdere-image-8');
    var mobile_image_9 = $('#mobile-medarbejdere-image-9');
    var mobile_image_10 = $('#mobile-medarbejdere-image-10');
    var mobile_image_11 = $('#mobile-medarbejdere-image-11');
    var mobile_image_12 = $('#mobile-medarbejdere-image-12');
    var mobile_image_13 = $('#mobile-medarbejdere-image-13');
    var mobile_image_14 = $('#mobile-medarbejdere-image-14');


    mobile_image_1.on('click', function(){
        if($(this).hasClass('mobile-medarbejdere-image-is-active-wrapper')){
            mobile_image_2.removeClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_2.find('.mobile-medarbejdere-image:first').removeClass('mobile-medarbejdere-image-is-active');
            mobile_image_2.find('.mobile-medarbejder-description:first').css('display', 'none');
            mobile_image_2.css({'left' : '13%' , 'width' : '85px'});
            mobile_image_2.find('.mobile-plus:first').css({'display':'block', 'top' : '1%', 'left' : '9%'});

            mobile_image_3.removeClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_3.find('.mobile-medarbejdere-image:first').removeClass('mobile-medarbejdere-image-is-active');
            mobile_image_3.find('.mobile-medarbejder-description:first').css('display', 'none');
            mobile_image_3.css({'top' : '48%'});
            mobile_image_3.find('.mobile-plus:first').css({'display':'block', 'top' : '1%', 'left' : '9%'});
        }else{
            mobile_image_2.addClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_2.find('.mobile-medarbejdere-image:first').addClass('mobile-medarbejdere-image-is-active');
            mobile_image_2.find('.mobile-medarbejder-description:first').css('display', 'block');

            mobile_image_2.css({'left' : '7.3%'});
            mobile_image_3.css({'top' : '48%'});
        }

    });

    mobile_image_2.on('click', function () {
        if($(this).hasClass('mobile-medarbejdere-image-is-active-wrapper')){
            mobile_image_1.removeClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_1.find('.mobile-medarbejdere-image:first').removeClass('mobile-medarbejdere-image-is-active');
            mobile_image_1.find('.mobile-medarbejder-description:first').css('display', 'none');
            mobile_image_1.find('.mobile-plus:first').css({'display':'block'});
            mobile_image_3.find('.mobile-plus:first').css({'display':'block'});

            mobile_image_3.removeClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_3.find('.mobile-medarbejdere-image:first').removeClass('mobile-medarbejdere-image-is-active');
            mobile_image_3.find('.mobile-medarbejder-description:first').css('display', 'none');
            $(this).css({'left' : '7.3%', 'top' : '7.5%'});
        }else{
            $(this).css({'left' : '7.3%', 'top' : '5.5%'});
        }
    });

    mobile_image_3.on('click', function(){
        if($(this).hasClass('mobile-medarbejdere-image-is-active-wrapper')){
            $(this).css('top', '34%');
            mobile_image_1.removeClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_1.find('.mobile-medarbejdere-image:first').removeClass('mobile-medarbejdere-image-is-active');
            mobile_image_1.find('.mobile-medarbejder-description:first').css('display', 'none');
            mobile_image_1.find('.mobile-plus:first').css({'display':'block', 'top' : '1%', 'left' : '9%'});

            mobile_image_2.removeClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_2.find('.mobile-medarbejdere-image:first').removeClass('mobile-medarbejdere-image-is-active');
            mobile_image_2.find('.mobile-medarbejder-description:first').css('display', 'none');
            mobile_image_2.css({'left' : '13%'});
            mobile_image_2.find('.mobile-plus:first').css({'display':'block', 'top' : '1%', 'left' : '9%'});
        }else{
            $(this).css('top', '47%');

            mobile_image_2.addClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_2.find('.mobile-medarbejdere-image:first').addClass('mobile-medarbejdere-image-is-active');
            mobile_image_2.find('.mobile-medarbejder-description:first').css('display', 'block');
            mobile_image_2.css({'left' : '7.3%'});
        }
    });

    mobile_image_4.on('click', function () {
        if($(this).hasClass('mobile-medarbejdere-image-is-active-wrapper')){
            mobile_image_5.removeClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_5.find('.mobile-medarbejdere-image:first').removeClass('mobile-medarbejdere-image-is-active');
            mobile_image_5.find('.mobile-medarbejder-description:first').css('display', 'none');
            mobile_image_5.css({'left' : '33.3%'});
            mobile_image_5.find('.mobile-plus:first').css({'display':'block', 'top' : '1%', 'left' : '9%'});

            mobile_image_6.removeClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_6.find('.mobile-medarbejdere-image:first').removeClass('mobile-medarbejdere-image-is-active');
            mobile_image_6.find('.mobile-medarbejder-description:first').css('display', 'none');
            mobile_image_6.css({'top': '47%'});
            mobile_image_6.find('.mobile-plus:first').css({'display':'block', 'top' : '1%', 'left' : '9%'});
        }else{
            mobile_image_6.css({'top': '36%'});
        }
    });
    mobile_image_5.on('click', function(){
        if($(this).hasClass('mobile-medarbejdere-image-is-active-wrapper')){
            mobile_image_4.removeClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_4.find('.mobile-medarbejdere-image:first').removeClass('mobile-medarbejdere-image-is-active');
            mobile_image_4.find('.mobile-medarbejder-description:first').css('display', 'none');
            mobile_image_4.find('.mobile-plus:first').css({'display':'block', 'top' : '1%', 'left' : '9%'});

            mobile_image_6.removeClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_6.find('.mobile-medarbejdere-image:first').removeClass('mobile-medarbejdere-image-is-active');
            mobile_image_6.find('.mobile-medarbejder-description:first').css('display', 'none');
            mobile_image_6.find('.mobile-plus:first').css({'display':'block', 'top' : '1%', 'left' : '9%'});
            $(this).css({'left' : '27.3%'});
        }else{
            $(this).css({'left' : '33.3%'});
        }
    });
    mobile_image_6.on('click', function () {
        if($(this).hasClass('mobile-medarbejdere-image-is-active-wrapper')){
            $(this).css({'top' : '36%'});
            mobile_image_5.removeClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_5.find('.mobile-medarbejdere-image:first').removeClass('mobile-medarbejdere-image-is-active');
            mobile_image_5.find('.mobile-medarbejder-description:first').css('display', 'none');
            mobile_image_5.css({'left' : '33.3%'});
            mobile_image_5.find('.mobile-plus:first').css({'display':'block'});

            mobile_image_4.removeClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_4.find('.mobile-medarbejdere-image:first').removeClass('mobile-medarbejdere-image-is-active');
            mobile_image_4.find('.mobile-medarbejder-description:first').css('display', 'none');
            mobile_image_4.find('.mobile-plus:first').css({'display':'block'});
        }
    });

    mobile_image_7.on('click', function () {
        if($(this).hasClass('mobile-medarbejdere-image-is-active-wrapper')){
            mobile_image_8.removeClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_8.find('.mobile-medarbejdere-image:first').removeClass('mobile-medarbejdere-image-is-active');
            mobile_image_8.find('.mobile-medarbejder-description:first').css('display', 'none');
            mobile_image_8.css({'top' : '49.2%'});
            mobile_image_8.find('.mobile-plus:first').css({'display':'block'});
        }else{
            mobile_image_8.css({'top' : '36%'});
        }
    });

    mobile_image_8.on('click', function () {
        if($(this).hasClass('mobile-medarbejdere-image-is-active-wrapper')){
            mobile_image_7.removeClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_7.find('.mobile-medarbejdere-image:first').removeClass('mobile-medarbejdere-image-is-active');
            mobile_image_7.find('.mobile-medarbejder-description:first').css('display', 'none');
            mobile_image_7.find('.mobile-plus:first').css({'display':'block', 'top' : '1%', 'left' : '9%'});
            $(this).css({'top' : '36%'});

            mobile_image_8.find('.mobile-plus:first').css({'display':'none'});

            mobile_image_9.removeClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_9.find('.mobile-medarbejdere-image:first').removeClass('mobile-medarbejdere-image-is-active');
            mobile_image_9.find('.mobile-medarbejder-description:first').css('display', 'none');
            mobile_image_9.find('.mobile-plus:first').css({'display':'block'});
        }else{
            mobile_image_9.addClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_9.find('.mobile-medarbejdere-image:first').addClass('mobile-medarbejdere-image-is-active');
            mobile_image_9.find('.mobile-medarbejder-description:first').css('display', 'block');


            $(this).css({'top' : '36%'});
        }
    });

    mobile_image_9.on('click', function () {
        if($(this).hasClass('mobile-medarbejdere-image-is-active-wrapper')){
            mobile_image_10.removeClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_10.find('.mobile-medarbejdere-image:first').removeClass('mobile-medarbejdere-image-is-active');
            mobile_image_10.find('.mobile-medarbejder-description:first').css('display', 'none');
            mobile_image_10.find('.mobile-medarbejder-description:first').css('display', 'none');
            mobile_image_10.find('.mobile-plus:first').css('display','block');

            $(this).css('top', '40%');

            mobile_image_11.removeClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_11.find('.mobile-medarbejdere-image:first').removeClass('mobile-medarbejdere-image-is-active');
            mobile_image_11.find('.mobile-medarbejder-description:first').css('display', 'none');
            mobile_image_11.css({'left' : '72%', 'top' : '36%'});
            mobile_image_11.find('.mobile-plus:first').css({'display':'block', 'top' : '1%', 'left' : '9%'});
        }else{

            // mobile_image_10.find('.mobile-plus:first').addClass('force-plus-mobile');
        }

    });

    mobile_image_10.on('click', function () {
        if($(this).hasClass('mobile-medarbejdere-image-is-active-wrapper')){
            mobile_image_11.removeClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_11.find('.mobile-medarbejdere-image:first').removeClass('mobile-medarbejdere-image-is-active');
            mobile_image_11.find('.mobile-medarbejder-description:first').css('display', 'none');
            mobile_image_11.css({'left' : '72%', 'top' : '36%'});
            mobile_image_11.find('.mobile-plus:first').css({'display':'block', 'top' : '1%', 'left' : '9%'});

            mobile_image_9.removeClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_9.find('.mobile-medarbejdere-image:first').removeClass('mobile-medarbejdere-image-is-active');
            mobile_image_9.find('.mobile-medarbejder-description:first').css('display', 'none');
            mobile_image_9.find('.mobile-plus:first').css({'display':'block'});
            mobile_image_9.css({'top' : '45%'});
        }else{

        }
    });

    mobile_image_11.on('click', function () {
        if($(this).hasClass('mobile-medarbejdere-image-is-active-wrapper')){
            mobile_image_10.removeClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_10.find('.mobile-medarbejdere-image:first').removeClass('mobile-medarbejdere-image-is-active');
            mobile_image_10.find('.mobile-medarbejder-description:first').css('display', 'none');
            mobile_image_10.find('.mobile-plus:first').css({'display':'block', 'top' : '1%', 'left' : '9%'});
            $(this).css({'top' : '27%', 'left' : '70%'});

            mobile_image_9.removeClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_9.find('.mobile-medarbejdere-image:first').removeClass('mobile-medarbejdere-image-is-active');
            mobile_image_9.find('.mobile-medarbejder-description:first').css('display', 'none');
            mobile_image_9.find('.mobile-plus:first').css({'display':'block'});
            mobile_image_9.css({'top' : '45%'});
        }
    });

    mobile_image_12.on('click', function () {
        if($(this).hasClass('mobile-medarbejdere-image-is-active-wrapper')){
            mobile_image_14.removeClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_14.find('.mobile-medarbejdere-image:first').removeClass('mobile-medarbejdere-image-is-active');
            mobile_image_14.find('.mobile-medarbejder-description:first').css('display', 'none');
            mobile_image_14.find('.mobile-plus:first').css({'display':'block'});

            mobile_image_13.removeClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_13.find('.mobile-medarbejdere-image:first').removeClass('mobile-medarbejdere-image-is-active');
            mobile_image_13.find('.mobile-medarbejder-description:first').css('display', 'none');
            mobile_image_13.find('.mobile-plus:first').css({'display':'block'});
            $(this).css({'top' : '41%'});
        }else{
            $(this).css({'top' : '44%', 'right' : '2%'});
        }
    });

    mobile_image_13.on('click', function () {
        if($(this).hasClass('mobile-medarbejdere-image-is-active-wrapper')){
            // mobile_image_12.removeClass('mobile-medarbejdere-image-is-active-wrapper');
            // mobile_image_12.find('.mobile-medarbejdere-image:first').removeClass('mobile-medarbejdere-image-is-active');
            // mobile_image_12.find('.mobile-medarbejder-description:first').css('display', 'none');
            // mobile_image_12.css({'top' : '36%', 'left' : '93%'});
            mobile_image_14.removeClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_14.find('.mobile-medarbejdere-image:first').removeClass('mobile-medarbejdere-image-is-active');
            mobile_image_14.find('.mobile-medarbejder-description:first').css('display', 'none');
            mobile_image_14.find('.mobile-plus:first').css({'display':'block'});

            mobile_image_12.removeClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_12.find('.mobile-medarbejdere-image:first').removeClass('mobile-medarbejdere-image-is-active');
            mobile_image_12.find('.mobile-medarbejder-description:first').css('display', 'none');
            mobile_image_12.find('.mobile-plus:first').css({'display':'block'});

        }else{



            // mobile_image_12.addClass('mobile-medarbejdere-image-is-active-wrapper');
            // mobile_image_12.find('.mobile-medarbejdere-image:first').addClass('mobile-medarbejdere-image-is-active');
            // mobile_image_12.find('.mobile-medarbejder-description:first').css('display', 'block');
            // mobile_image_12.css({'top' : '28%', 'left' : '87%'});
        }
    });

    mobile_image_14.on('click', function () {
        if($(this).hasClass('mobile-medarbejdere-image-is-active-wrapper')){
            mobile_image_14.find('.mobile-plus:first').css({'display':'none'});

            mobile_image_13.removeClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_13.find('.mobile-medarbejdere-image:first').removeClass('mobile-medarbejdere-image-is-active');
            mobile_image_13.find('.mobile-plus:first').css({'display':'block'});
            mobile_image_13.find('.mobile-medarbejder-description:first').css('display', 'none');

            mobile_image_12.removeClass('mobile-medarbejdere-image-is-active-wrapper');
            mobile_image_12.find('.mobile-medarbejdere-image:first').removeClass('mobile-medarbejdere-image-is-active');
            mobile_image_12.find('.mobile-medarbejder-description:first').css('display', 'none');
            mobile_image_12.css({'top' : '44%'});
            mobile_image_12.find('.mobile-plus:first').css({'display':'block'});
        }else{
            mobile_image_13.find('.mobile-medarbejder-description:first').css('display', 'none');
            mobile_image_13.find('.mobile-plus:first').css({'display':'none'});


        }
    });



    if($(window).width() < 360){
        if ( /^((?!chrome|android).)*safari/i.test(navigator.userAgent)) {
            // mobile_image_6.css({'top' : '29%'});
            // mobile_image_8.css({'top' : '43%'});
            mobile_image_9.css({'top' : '32%'});

            mobile_image_1.on('click', function () {
                mobile_image_3.css({'top' : '43%'})
            });
            mobile_image_4.on('click', function () {
                mobile_image_6.css({'top' : '43%'})
            });
            // mobile_image_7.on('click', function () {
            //     mobile_image_8.css({'top' : '32%'})
            // });
            // mobile_image_8.on('click', function () {
            //     mobile_image_8.css({'top' : '40%'})
            //     mobile_image_7.css({'top' : '40%'})
            // });
            mobile_image_10.on('click', function () {
                mobile_image_11.css({'top' : '42%'})
            });
        }
    }
});


$(document).ready(function () {
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
var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};
var hamburgers = document.querySelectorAll(".hamburger");
if (hamburgers.length > 0) {
    forEach(hamburgers, function(hamburger) {
        hamburger.addEventListener("click", function() {
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
