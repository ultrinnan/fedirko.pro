$(window).scroll(function() {
    if ($(this).scrollTop() < 80){
        $('header').removeClass("small_header");
    }
    else{
        $('header').addClass("small_header");
    }
});

$(document).ready(function() {
    $('.top_menu .dropdown-toggle').removeAttr('data-toggle');

    $('.mobile_menu').click(function () {
        $('.top_menu').toggleClass('active');
        $('.mobile_menu').toggle();
    });
    $('.top_menu').click(function () {
        $('.top_menu').toggleClass('active');
        $('.mobile_menu').toggle();
    });
});