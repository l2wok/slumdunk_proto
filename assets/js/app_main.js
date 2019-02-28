$(function () {
    'use strict';
});
jQuery(function($) {
    function fix_size() {
        var images = $('img.item-card-image');
        images.each(setsize);

        function setsize() {
            var img = $(this),
                    img_dom = img.get(0),
                    container = img.parents('.item-card-image');
            if (img_dom.complete) {
                resize();
            } else
                img.one('load', resize);

            function resize() {
                if ((container.width() / container.height()) < (img_dom.width / img_dom.height)) {
                    img.width('70%');
                    img.height('auto');
                    return;
                }
                img.height('70%');
                img.width('auto');
                img.css('margin-top', '3rem');
            }
        }
    }
    $(window).on('resize', fix_size);
    fix_size();
});
$(document).ready(function() {
    setTimeout(showHide,1000);
    
    
    $(".collapsed").on('click', function(e) {
        let th = $(this);
        if (th.hasClass('active') !== true) {
            $('.btn.border-warning.active').removeClass('active');
        }
        th.toggleClass('active');
        th.blur();
    });
});
function showHide(){
    if($('html').hasClass('desktop')){
        $('.only-mobile').hide();
        $('.only-desktop').show();
    } else {
        $('.only-mobile').show();
        $('.only-desktop').hide();
    }
}