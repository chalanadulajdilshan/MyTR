$(document).ready(function () {

    //Create menu
    $('#create').click(function (event) {
        event.preventDefault();
        tinymce.triggerSave();

        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your menu title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#price').val() || $('#price').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Menu price..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#description').val() || $('#description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Menu description..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#status').prop("checked", true)) {
            swal({
                title: "Error!",
                text: "Please accept availability..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {

            //start preloarder
            $('.someBlock').preloader();

            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "post-and-get/ajax/menu.php",
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
                            window.location.replace("create-menu-photo.php?id=" + result.id);
                        }, 1500);
                    });
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });

    //Update menu
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
        } else if (!$('#price').val() || $('#price').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Menu price..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#description').val() || $('#description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Property description..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {

            //start preloarder
            $('.someBlock').preloader();

            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "post-and-get/ajax/menu.php",
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