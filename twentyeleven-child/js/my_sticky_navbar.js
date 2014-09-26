jQuery(document).ready(function(){
//make the subnav sticky
    var stickyHeader = jQuery('#access').offset().top;
    jQuery(window).scroll(function(){
            if( jQuery(window).scrollTop() > stickyHeader ) {
                    jQuery('#access').css({position: 'fixed', top: '0px'});
            } else {
                    jQuery('#access').css({position: 'static', top: '0px'});
            }
    });
});