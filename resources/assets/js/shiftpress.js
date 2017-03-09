'use strict';

jQuery(document).foundation();

jQuery(document).ready(function ($) {

    var buttonMenu    = $('#toggle-menu');
    var buttonSubmenu = $('.menu-item-has-children a');
    var menu          = $('#main-navigation');
    var submenu       = $('#main-navigation .sub-menu');

    function offMainMenu() {
        buttonMenu.off();
        buttonSubmenu.off();
    }

    function mainMenu() {
    }

    function resetMenu() {
        buttonMenu.removeClass('menu-opened');
        buttonSubmenu.removeClass('active');
        submenu.removeAttr('style');
        menu.removeClass('active-menu');
    }


    $(window).on('load resize', function(event) {

        if ($(window).width() > 1000) {
            $("nav > ul, nav > ul  li  ul").removeAttr("style");
            offMainMenu();
            console.log('desktop');
        }else {

            resetMenu();
            buttonMenu.on('click',function(event) {
                $(this).toggleClass('menu-opened');
                $(this).next(menu).toggleClass('active-menu');
            });//END TOGGLE MENU

            buttonSubmenu.on('click', function(event) {
                event.preventDefault();
                $(this).toggleClass('active');
                $(this).next(submenu).stop().slideToggle();
                event.stopPropagation();
            });//END BUTTONS SUBMENU
            console.log('mobile');
        }
    });

});
