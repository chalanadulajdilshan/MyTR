$(document).ready(function () {

    //Update hotel bookings
    $('#update').click(function (event) {

        var formData = new FormData($('#form-data')[0]);
        $.ajax({
            url: "post-and-get/ajax/bookings.php",
            type: "POST",
            data: formData,
            async: false,
            dataType: 'json',
            success: function (result) {
                swal({
                    title: "Success!",
                    text: "Your changes saved successfully!...",
                    type: 'success',
                    timer: 2000,
                    showConfirmButton: false
                }, function () {
                    setTimeout(function () {
                        window.location.reload();
                    }, 1500);
                });
            },
            cache: false,
            contentType: false,
            processData: false
        });

    });
});

