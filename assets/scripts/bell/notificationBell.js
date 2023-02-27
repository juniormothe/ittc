setInterval(function () {
    $.ajax({
        url: 'app/Models/Notification/Notification.php?type=bell'
    });
}, 5000);

setInterval(function () {
    $.ajax({
        url: 'app/Models/Notification/Bell.php'
    }).done(
        function (data) {
            $('.bellNotific').html(data);
        });
}, 500);