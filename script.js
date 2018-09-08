/** Scroll to top button */
jQuery(document).ready(function ($) {
    $(window).scroll(function() {
        if ( $(this).scrollTop() > 50 ) {
            $('.skip-link').addClass('visible');
        } else {
            $('.skip-link').removeClass('visible');
        }
    });
});