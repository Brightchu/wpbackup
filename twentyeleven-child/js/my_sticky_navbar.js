jQuery(document).ready(function(){
//make the subnav sticky
    var stickyHeader = jQuery('#access').offset().top;
    jQuery(window).scroll(function(){
            if( jQuery(window).scrollTop() > stickyHeader ) {
                    jQuery('#access').css({"position": "fixed", "top": "0px", "backgroud": "rgba(255, 246, 219, 1)"});
                    //jQuery('#access').css({backgroud:'rgba(255, 246, 219, 1)'});
            } 
            else {
                    jQuery('#access').css({"position": "static", "top": "0px", "backgroud": "rgba(225, 225, 225, 1)"});
            }
    });
});