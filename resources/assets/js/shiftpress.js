'use strict';

jQuery(document).foundation();

jQuery(document).ready(function ($) {
    var buttonMenu    = $('#toggle-menu');
    var menu          = $('.navegation');
    var buttonSubmenu = $('.menu-item-has-children a');
    var submenu       = $('.sub-menu');

    buttonMenu.on('click',function(event) {
        $(this).toggleClass('menu-opened');
        $(this).next(menu).toggleClass('active-menu');
    });//END TOGGLE MENU

    buttonSubmenu.on('click', function(event) {
        event.preventDefault();
        $(this).toggleClass('active');
        $(this).next(submenu).stop().slideToggle();
    });//END BUTTONS SUBMENU

});
