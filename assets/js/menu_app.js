$(function () {
    'use strict';
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
});
