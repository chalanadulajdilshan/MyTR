$(document).ready(function () {

    //Create
    $("#create").click(function (event) {
        event.preventDefault();

        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter Title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else if (!$('#dates').val() || $('#dates').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter number of dates..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#price').val() || $('#price').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter price..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });


        } else {
            //start preloarder
            $('.someBlock').preloader();

            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "post-and-get/ajax/offer-duration.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {

                    //remove preloarder
                    $('.someBlock').preloader('remove');

                    swal({
                        title: "Success!",
                        text: "Your data was saved successfully!.....",
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
        }
    });

    //update
    $("#update").click(function (event) {
        event.preventDefault();

        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter Title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else if (!$('#dates').val() || $('#dates').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter number of dates..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#price').val() || $('#price').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter price..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else {

            //start preloarder
            $('.someBlock').preloader();

            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "post-and-get/ajax/offer-duration.php",
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
        }
    });

});
