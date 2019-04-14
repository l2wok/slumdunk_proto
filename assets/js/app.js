$(function() {
    $(window).on('resize', function() {
        winResize();
//        console.log(device)
    });
});
$(document).ready(function() {
    setTimeout(winResize, 120);
    $('#go-to-top').on('click', function(ev) {
        ev.preventDefault();
        $("html,body").stop().animate({scrollTop: 0}, 800);
        return false;
    });
    $('[data-toggle="collapse"]').on('click', function() {
        let btn = $(this),
                target = btn.data('target');
        if ($(target).hasClass('show')) {
            btn.removeClass('active');
            btn.blur();
        } else {
            if (target !== "#j-nav") {
                $('[data-toggle="collapse"]').removeClass('active');
                btn.addClass('active');
            }
        }
    });
    $("#alone-search").on('click', function(e) {
        let icon = $('#alone-search i.fa');
        if ($('#searchPanel').hasClass('show')) {
            icon.removeClass('fa-search-minus');
            icon.addClass('fa-search');
        } else {
            icon.removeClass('fa-search');
            icon.addClass('fa-search-minus');
        }
        if ($('#j-nav').hasClass('show')) {
            if ($('#searchPanel').hasClass('show') == false) {
                $("#j-nav").collapse('hide');
            }
        }
    });
    // hand-resize non-quad image!!!
//    $('.card-img-top').each(function() {
//        let im = $(this);
//        if (im.width() !== im.height()) {
//            im.height(im.width());
//        }
//    });
    $('[aria-controls="desc-plus"], [aria-controls="info-plus"], [aria-controls="back-plus"]').on('click', function() {
        let th = $(this);
        let ta = th.attr('href');
        if ($(ta).hasClass('show')) {
            th.text('Читать дальше');
        } else {
            th.text('Свернуть');
        }
    });
    $("#size-us, #size-cm, #size-eu, #size-ru, #size-uk").on('click', '.btn.j-size', function() {
        let size = $(this).data('size'),
                reg = $(this).data('reg');
        if (size !== undefined && reg !== undefined) {
            $("#j-item-size").attr('value', reg + "-" + size);
            $("#order-size-reg").text(reg);
            $("#order-size").text(size);
            showToast("Выбран размер", "Регион - " + reg + ", размер - " + size, 1000);
        }
    });
    $("#size-us, #size-cm, #size-eu, #size-ru, #size-uk").on('click', '.btn.j-ask', function() {
        let size = $(this).data('size'),
                reg = $(this).data('reg');
        if (size !== undefined && reg !== undefined) {
            $("#j-modal-ask-size").text("Регион - " + reg + ", размер - " + size);
        }
    });
    $("#sms-on").on('change',function (){
        if($(this).prop('checked')){
            $("#j-sms").prop("disabled", false);
        } else {
            $("#j-sms").prop('disabled',true)
        }
    })
});
function winResize() {
    let pw = $(document).width();
    if (pw < 990 || $('html').hasClass('portrait')) {
        $('#j-top-carousel').carousel(0);
        $('#j-top-carousel').carousel({'ride': false, 'touch': false, 'keyboard': false});
        $('#j-top-carousel').carousel('dispose');
        $('.only-mobile').show();
        $('.only-desktop').hide();
//        $('.logo').css('margin-left', (($('.logo').parent().width() / 2) - $('#j-toogler').width() - ($('.logo').width() / 2)));
    } else if ($('html').hasClass('desktop')) {
        $('.only-mobile').hide();
        $('.only-desktop').show();
        $('.logo').css('margin-left', 0);
    } else {
        $('#j-top-carousel').carousel(0);
        $('#j-top-carousel').carousel({'ride': false, 'touch': false, 'keyboard': false});
        $('#j-top-carousel').carousel('dispose');
        $('.only-mobile').show();
        $('.only-desktop').hide();
//        $('.logo').css('margin-left', (($('.logo').parent().width() / 2) - $('#j-toogler').width() - ($('.logo').width() / 2)));
    }
    card_text_ellipse("#j-top-cards");
}
;

function preloadActive() {
    let pre = $(".preloader");
    if (pre.hasClass('invisible'))
        pre.toggleClass('invisible');

}
function card_text_ellipse(cr) {
    let all = $(cr);
    $.each(all, function() {
        let $elem = $(this);
        let x = $elem.children('p').css('width', ($elem.width() - 15) + 'px');
    });
}
;
