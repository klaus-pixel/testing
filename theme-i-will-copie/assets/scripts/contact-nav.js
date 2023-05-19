$(document).ready(function () {
    var dropdown_li_a = $('.dropdown li a');
    dropdown_li_a.addClass('underline');

    var dropdown_li = $('.dropdown li');
    dropdown_li.mouseenter(function () {
        $(this).find('.sub-menu').addClass('primary-menu-submenu-is-active');
    });
    dropdown_li.mouseleave(function () {
        $(this).find('.sub-menu').removeClass('primary-menu-submenu-is-active');
    });

    var dropdown_submenu_li = $('.dropdown li .sub-menu li');
    dropdown_submenu_li.mouseenter(function () {
        $(this).closest('.sub-menu').addClass('primary-menu-submenu-is-active');
    });

})