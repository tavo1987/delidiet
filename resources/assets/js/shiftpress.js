'use strict';

jQuery(document).foundation();

jQuery(document).ready(function ($) {

    var buttonMenu    = $('#toggle-menu');
    var buttonSubmenu = $('.menu-item-has-children a');
    var menu          = $('#main-navigation');
    var submenu       = $('#main-navigation .sub-menu');

    buttonMenu.on('click',function(event) {
        $(this).toggleClass('menu-opened');
        $(this).next(menu).toggleClass('active-menu');
    });//END TOGGLE MENU


    function offMainMenu() {
        buttonSubmenu.off();
    }

    function resetMenu() {
        $("nav > ul, nav > ul  li  ul").removeAttr("style");
        buttonMenu.removeClass('menu-opened');
        buttonSubmenu.removeClass('active');
        submenu.removeAttr('style');
        menu.removeClass('active-menu');
    }


    $(window).on('load resize', function(event) {
        resetMenu();
        if (window.matchMedia('(min-width: 64em)').matches) {
            $("nav > ul, nav > ul  li  ul").removeAttr("style");
            offMainMenu();
            console.log('desktop');
        }else {
            buttonSubmenu.on('click', function(event) {
                event.preventDefault();
                $(this).toggleClass('active');
                $(this).next(submenu).stop().slideToggle();
                event.stopPropagation();
            });//END BUTTONS SUBMENU
            console.log('mobile')
        }
    });

    //ADD BACKGROUND COLUMN BUTTOM
    $( ".background-section" ).each(function() {
        var attr = $(this).attr('data-background-src');

        if (typeof attr !== typeof undefined && attr !== false) {
          $(this).css({
            'background': 'url('+attr+') no-repeat bottom right',

          });
        }
    });

    //ADD BACKGROUND PAGE FEATURED IMAGE
    $( ".sp-page__header" ).each(function() {
        var attr = $(this).attr('data-page-featured-image');
        if (typeof attr !== typeof undefined && attr !== false) {
          $(this).css({
            'background': 'url('+attr+')',
          });
        }
    });

});
