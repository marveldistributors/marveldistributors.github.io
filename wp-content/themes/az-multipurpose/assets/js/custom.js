(function (jQuery) {
    "use strict";
    jQuery(document).ready(function(){




        /* nav bar fixed */
        jQuery(window).scroll(function () {



            if (jQuery(window).scrollTop() > 30) {
                jQuery('.main-header').addClass('navbar-fixed-top');
            }

            if (jQuery(window).scrollTop() < 31) {
                jQuery('.main-header').removeClass('navbar-fixed-top');
            }
        });


        /* jQuery(function () {
             jQuery('.search-btn').live('click', function () {
                 jQuery('.header-search .top-search').slideToggle('slow');
             });
         });*/



//Primary Nav in both scene

        var windowWidth = jQuery(window).width();
        var nav = ".main-nav";
        //    for sub menu arrow

        //    for sub menu arrow
        jQuery('.main-nav >li:has("ul").menu-item>a').each(function() {
            jQuery(this).addClass('below').after("<span class='arrows'><i class='fa fa-chevron-down'></i></span>");
        });
        jQuery('ul:not(.main-nav)>li:has("ul").menu-item>a').each(function() {
            jQuery(this).addClass('side').after("<span class='arrows'><i class='fa fa-chevron-down'></i></span>");
        });
        if (windowWidth >= 991) {

            jQuery('#showbutton').off('click');
            jQuery('.column-12').css('display', 'block');
            jQuery(nav).off('mouseenter', 'li');
            jQuery(nav).off('mouseleave', 'li');
            jQuery(nav).off('click', 'li');
            jQuery(nav).off('click', '.arrows');
            jQuery(nav).on('mouseenter', '.arrows', function() {
                jQuery(this).children('ul').stop().hide();
                jQuery(this).children('ul').slideDown(400);
            });
            jQuery(nav).on('mouseleave', 'li', function() {
                jQuery(this).children('ul').stop().slideUp(350);
            });
        } else {

            jQuery('#showbutton').off('click');
            jQuery('.column-12').css('display', 'none');
            jQuery(nav).off('mouseenter', 'li');
            jQuery(nav).off('mouseleave', 'li');
            jQuery(nav).off('click', 'li');
            jQuery(nav).off('click', '.arrows');
            jQuery(nav).on('click', '.arrows', function(e) {
                jQuery(this).next('ul').attr('style=""');
                jQuery(this).next('ul').slideToggle();
                if (jQuery(this).next('ul').length !== 0) {
                    e.preventDefault();
                }
            });
            // for hide menu
            jQuery('#showbutton').on('click', function() {

                jQuery('.column-12').slideToggle();
            });
        }
        jQuery(window).resize(function() {
            windowWidth = jQuery(window).width();
            jQuery(nav + ' ul').each(function() {
                jQuery(this).attr('style', '" "');
            });
            if (windowWidth > 991) {
                jQuery('#showbutton').off('click');
                jQuery('.column-12').css('display', 'block');
                jQuery(nav).off('mouseenter', 'li');
                jQuery(nav).off('mouseleave', 'li');
                jQuery(nav).off('click', 'li');
                jQuery(nav).off('click', '.arrows');
                jQuery(nav).on('mouseenter', 'li', function() {
                    jQuery(this).children('ul').stop().hide();
                    jQuery(this).children('ul').slideDown(400);
                });
                jQuery(nav).on('mouseleave', 'li', function() {
                    jQuery(this).children('ul').stop().slideUp(350);
                });
            } else {
                jQuery('#showbutton').off('click');
                jQuery('.column-12').css('display', 'none');
                jQuery(nav).off('mouseenter', 'li');
                jQuery(nav).off('mouseleave', 'li');
                jQuery(nav).off('click', 'li');
                jQuery(nav).off('click', '.arrows');
                jQuery(nav).on('click', '.arrows', function(e) {
                    jQuery(this).next('ul').attr('style=""');
                    jQuery(this).next('ul').slideToggle();
                    if (jQuery(this).next('ul').length !== 0) {
                        e.preventDefault();
                    }
                });
                // for hide menu
                jQuery('#showbutton').on('click', function() {

                    jQuery('.column-12').slideToggle();
                });
            }
        });


        /*
        scrollUp
        ============================*/
        jQuery.scrollUp({
            scrollText: '<i class="fa fa-angle-up"></i>',
            easingType: 'linear',
            scrollSpeed: 900,
            animation: 'fade'
        });

        
        /*news ticker*/
        jQuery('.ticker').show().ticker();


//sticky sidebar
        var at_body = jQuery("body");
        var at_window = jQuery(window);

        if(at_body.hasClass('at-sticky-sidebar')){
            if(at_body.hasClass('sidebar-right')){
                jQuery('#secondary, #primary').theiaStickySidebar();
            }
            else{
                jQuery('#secondary, #primary').theiaStickySidebar();
            }
        }

        /*AFTER LAST MENU CLOSED */
        jQuery('.last-menu').focusout(function (e) {
            jQuery('.im-hiding').slideToggle();
            e.preventDefault();
        })


    });


})(jQuery);
