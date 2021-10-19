$(document).ready(function () {

//Create rent a car price
    $('#create').click(function (event) {
        event.preventDefault();

        if (!$('#currency_type').val() || $('#currency_type').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your currency type..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#type').val() || $('#type').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your type..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#driver').val() || $('#driver').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your driver..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else if (!$('#price').val() || $('#price').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your price..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {
            //start preloarder
            $('.someBlock').preloader();


            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "post-and-get/ajax/rent-a-car-price.php",
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
                            window.location.replace("create-rent-car-price.php?id=" + result.id + "&&message=10");

                        }, 1500);
                    });
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });


//Update rent car price
    $('#update').click(function (event) {
        event.preventDefault();

        if (!$('#currency_type').val() || $('#currency_type').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your currency type..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#type').val() || $('#type').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your type..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#driver').val() || $('#driver').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your driver..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else if (!$('#price').val() || $('#price').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your price..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {

            //start preloarder
            $('.someBlock').preloader();


            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "post-and-get/ajax/rent-a-car-price.php",
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
                            window.location.replace("edit-rent-car-price.php?id=" + result.id + "&&message=9");

                        }, 1500);
                    });
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });
});