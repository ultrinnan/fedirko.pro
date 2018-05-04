$(window).scroll(function() {
    if ($(this).scrollTop() < 40){
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
        $('body').toggleClass('noscroll');
        $('.mobile_menu').toggle();
    });
    $('.top_menu').click(function () {
        $('.top_menu').toggleClass('active');
        $('body').toggleClass('noscroll');
        $('.mobile_menu').toggle();
    });


});