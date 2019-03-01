$(function () {
    'use strict';
    $(document).on('shown.bs.dropdown', '#j-nav', function(e) {
        $('.j-move').on('click', function(e) {
            e.preventDefault(); // no need to use this line
            let sectionTo = $(this).attr('href');
            let i = $(sectionTo).offset().top;
            $('.offcanvas-collapse').animate({
                scrollTop: i
            }, 700);
            console.log('='+ i);
            return false;
        });
    });
});
$(document).ready(function() {
    
    $('[data-toggle="collapse"]').on('click', function() {
        let btn = $(this),
                target = btn.data('target');
        if ($(target).hasClass('show')) {
            btn.removeClass('active');
        } else {
            if (target !== "#j-nav") {
                $('#j-nav').removeClass('show');
            }
            $('[data-toggle="collapse"]').removeClass('active');
            btn.addClass('active');
        }
        btn.blur();
    });
    
//    $('.j-move').on('click', function (e){
//        e.preventDefault(); // no need to use this line
//        var target = $(this).attr('href');
//        var $target = $(target);
//        console.log( $target.offset().top);
//
//
////        $('html, body').animate({
////            'scrollTop': $target.offset().top
////        }, 1000, function () {  // swing here will work if you include jquery-ui  without that it will not make a effect
////            window.location.hash = target;
////        });
//        return false
//    });
});