//add to favorite project
$('.favorite').click(function () {
    var id = $(this).attr('data-id');
    var i = $(this);
    $.ajax({
        url: 'add-to-favorites',
        type: 'post',
        data: {id: id},
        success: function () {
            if (i.hasClass('checked')){
                i.removeClass('checked').removeClass('fa-star').addClass('fa-star-o');
            } else {
                i.removeClass('fa-star-o').addClass('checked').addClass('fa-star');
            }
        }
    });
});

//show/hide project from users
$('.visible').click(function () {
    var id = $(this).attr('data-id');
    var i = $(this);
    $.ajax({
        url: 'change-visibility',
        type: 'post',
        data: {id: id},
        success: function () {
            if (i.hasClass('checked')){
                i.removeClass('checked').removeClass('fa-eye').addClass('fa-eye-slash');
            } else {
                i.removeClass('fa-eye-slash').addClass('checked').addClass('fa-eye');
            }
        }
    });
});
