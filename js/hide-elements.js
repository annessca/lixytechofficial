jQuery.noConflict();
jQuery(document).ready(function($){
    var custom_logo_image = $(".site-title").prev();
    if(custom_logo_image.length < 1) {
        $(".site-title").show();
    } else if(custom_logo_image.length){
        $(".site-title").hide();
    }
});