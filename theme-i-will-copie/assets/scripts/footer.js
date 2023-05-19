
(function($){
    $(document).ready(function(){
        $("#example-dropdown").on('hover', function() {
            $(".button-light").toggleClass("hover");
        });

        $('.footer .medium-container .textwidget a[href*="tel:"]').each(function() {
            $(this).addClass('footer-underline');
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
            }else{
                $(this).addClass('hover');
                $(this).attr('aria-expanded', 'true');
                $('#mobile-group-dropdown').addClass('is-open');
                $('#mobile-group-dropdown').attr('aria-hidden', 'false');
                $('#mobile-group-dropdown').css({'display' : 'block', 'left' : '96.6563px'});
            }
        });
    });
})(jQuery);

$(document).ready(function() {
    $("#mobile-group-dropdown-button").on('click',function(event){
        $('#mobile-nav-section').animate({scrollTop: '+=200px'}, 800);
    });
});
