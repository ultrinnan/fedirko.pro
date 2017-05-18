// $('body').hide();
$('.favorites').click(function () {
    $.ajax({
        url: 'add-to-favorites',
        type: 'post',
        data: {},
        success: function (data) {
            alert(data.flag);
        }
    });
});
