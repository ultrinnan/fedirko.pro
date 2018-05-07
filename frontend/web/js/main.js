function header_change(){
    if ($(window).scrollTop() < 40){
        $('header').removeClass("small_header");
    }
    else{
        $('header').addClass("small_header");
    }
}

$(document).ready(function() {
    header_change();

    $(window).scroll(function() {
        header_change();
    });

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