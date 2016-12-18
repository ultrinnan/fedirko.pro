$(document).ready(function() {
    $(".fancybox").fancybox({
        openEffect	: 'none',
        closeEffect	: 'none',
        padding : 0
    });

    $('.navbar .dropdown-toggle').removeAttr('data-toggle');
});

$(window).scroll(function() {
    if ($(this).scrollTop() > 1 && !($('header').hasClass('small_header'))){
        $('header').addClass("small_header");
        console.log('moves!');
    }
    else{
        $('header').removeClass("small_header");
    }
});
