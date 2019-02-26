$(function () {
    'use strict';
});
$(document).ready(function() {
    setTimeout(showHide,1000);
    
    
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