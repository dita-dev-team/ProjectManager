//    Hide Profile Forms
$('.col2').hide();

$(document).ready(function () {

    //Show Profile Forms
    $('#edit-profile').on('click', function () {
        $('.profile-view').fadeOut('slow', function () {
            $('.profile-edit').fadeIn('slow');
        });
    });
});