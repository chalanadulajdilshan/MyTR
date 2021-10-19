jQuery(document).ready(function () {

    $("#save").click(function () {
        tinymce.triggerSave();
        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the title",
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
                url: "post-and-get/ajax/city.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (result) {

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

    $("#update").click(function () {
        tinymce.triggerSave();
        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the title",
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
                url: "post-and-get/ajax/city.php",
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
                            text: "Your data updated successfully !",
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

});


