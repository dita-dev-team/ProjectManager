//    Hide Profile Forms
$('.col2').hide();

$(document).ready(function () {

    //Show Profile Forms
    $('#editProfile').on('click', function () {
        $('.col2').fadeIn(1200).show();
        $('.col i').hide();
    });
});