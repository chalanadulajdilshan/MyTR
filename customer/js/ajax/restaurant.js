$(document).ready(function () {

    //Create restaurant
    $('#create').click(function (event) {
        event.preventDefault();
        tinymce.triggerSave();

        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your restaurant name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#address_1').val() || $('#address_1').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Street address..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#address_2').val() || $('#address_2').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Address Line 2..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#city').val() || $('#city').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your city..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#contact_name').val() || $('#contact_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your contact name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#contact_number').val() || $('#contact_number').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your contact number..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#open_time').val() || $('#open_time').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your open time.!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#close_time').val() || $('#close_time').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your close time.!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#description').val() || $('#description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Restaurant description..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if ($('#agree').prop("checked") == false) {
            swal({
                title: "Error!",
                text: "Please accept our agrement..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {

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
        }
    });

    //Update restaurant
    $('#update').click(function (event) {

        event.preventDefault();
        tinymce.triggerSave();

        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your restaurant name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#address_1').val() || $('#address_1').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Street address..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#address_2').val() || $('#address_2').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Address Line 2..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#city').val() || $('#city').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your city..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#contact_name').val() || $('#contact_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your contact name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#contact_number').val() || $('#contact_number').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your contact number..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#open_time').val() || $('#open_time').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your open time.!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#close_time').val() || $('#close_time').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your close time.!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#description').val() || $('#description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Restaurant description..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {

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
        }
    });
});