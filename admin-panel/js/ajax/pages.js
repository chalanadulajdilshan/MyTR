jQuery(document).ready(function () {

    $("#create").click(function (event) {
        event.preventDefault();
        tinymce.triggerSave();
        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter page title..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#description').val() || $('#description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter page description..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else {


//start preloarder
            $('.someBlock').preloader();
            //grab all form data  
            var formData = new FormData($("form#form-data")[0]);

            $.ajax({
                url: "post-and-get/ajax/pages.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function (result) {
//remove preloarder
                    $('.someBlock').preloader('remove');
                    if (result.status === 'success') {

                        swal({
                            title: "success!",
                            text: "Your data saved successfully !",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        window.setTimeout(function () {
                            window.location.reload()
                        }, 2000);

                    } else if (result.status === 'error') {

                        swal({
                            title: "Error!",
                            text: "Something went wrong",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    }
                }
            });

        }
        return false;
    });

    $("#update").click(function (event) {
        event.preventDefault();
        tinymce.triggerSave();

        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter page title..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#description').val() || $('#description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter page description..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else {


//start preloarder
            $('.someBlock').preloader();
            //grab all form data  
            var formData = new FormData($("form#form-data")[0]);

            $.ajax({
                url: "post-and-get/ajax/pages.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function (result) {
                    //remove preloarder
                    $('.someBlock').preloader('remove');
                    if (result.status === 'success') {
                        swal({
                            title: "success!",
                            text: "Your data Updated successfully !",
                            type: 'success',
                            timer: 2500,
                            showConfirmButton: false
                        });
                        window.setTimeout(function () {
                            window.location.reload()
                        }, 2000);

                    } else if (result.status === 'error') {

                        swal({
                            title: "Error!",
                            text: "Something went wrong",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    }
                }
            });

        }
        return false;
    });
});


