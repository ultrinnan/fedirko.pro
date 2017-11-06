$(document).ready(function() {
    $('.top_menu .dropdown-toggle').removeAttr('data-toggle');
});

$(window).scroll(function() {
    if ($(this).scrollTop() < 80){
        $('header').removeClass("small_header");
    }
    else{
        $('header').addClass("small_header");
    }
});
