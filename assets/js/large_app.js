$(document).ready(function() {
    $(".collapsed").on('click',function (e){
        let th = $(this);
        if(th.hasClass('active') !== true){
            $('.btn.border-warning.active').removeClass('active');
        }
        th.toggleClass('active');
        th.blur();
    });
});
