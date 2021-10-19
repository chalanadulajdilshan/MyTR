$(document).ready(function () {


    //active rent car company
    $('#active_company').click(function (event) {
        event.preventDefault();
        tinymce.triggerSave();

//start preloarder
        $('.someBlock').preloader();
        var formData = new FormData($('#form-data')[0]);
        $.ajax({
            url: "post-and-get/ajax/restaurant.php",
            type: "POST",
            data: formData,
            async: false,
            dataType: 'json',
            success: function (result) {

                //remove preloarder
                $('.someBlock').preloader('remove');

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

