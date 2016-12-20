$(document).ready(function() {
    $(".fancybox").fancybox({
        openEffect	: 'none',
        closeEffect	: 'none',
        padding : 0
    });

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
