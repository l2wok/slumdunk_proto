$(function() {
    'use strict';
    $(document).on('shown.bs.dropdown', '#j-nav', function(e) {
        $('.j-move').on('click', function(e) {
            e.preventDefault(); // no need to use this line
            let sectionTo = $(this).attr('href');
            let i = $(sectionTo).offset().top;
            $('.offcanvas-collapse').animate({
                scrollTop: i
            }, 700);
            console.log('=' + i);
            return false;
        });
    });
    $('#go-to-top').on('click', function() {
        $('html, body').animate({scrollTop: 0}, 300);
        return false;
    });
});
$(document).ready(function() {
    setTimeout(showHide, 100);

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
});
function showHide() {
    if ($('html').hasClass('desktop')) {
        $('.only-mobile').hide();
        $('.only-desktop').show();
    } else {
        $('.only-mobile').show();
        $('.only-desktop').hide();
    }
}