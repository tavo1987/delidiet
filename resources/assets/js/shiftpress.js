'use strict';

jQuery(document).foundation();

jQuery(document).ready(function ($) {

    function offMainMenu() {
        var buttonMenu    = $('#toggle-menu');
        var buttonSubmenu = $('.menu-item-has-children a');

        buttonMenu.off();
        buttonSubmenu.off();
    }

    function mainMenu() {
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
    }

    if ($(window).width() < 1024) {
        mainMenu();
    }

    $(window).resize(function () {
        console.log($(window).width());
        if ($(window).width() >= 1024) {
            $("nav > ul, nav > ul  li  ul").removeAttr("style");
            offMainMenu();
        }

        if ($(window).width() < 1024) {
            //$("nav > ul, nav > ul  li  ul").removeAttr("style");
            mainMenu();
        }
    });//END RESIZE
});
