jQuery(document).ready(function () {
    $("#update").click(function (event) {
        event.preventDefault();

        if (!$('#image_name').val() || $('#image_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter slider image",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else {

//start preloarder
            $('.someBlock').preloader();
            //grab all form data  
            var formData = new FormData($("form#change-details")[0]);

            $.ajax({
                url: "post-and-get/ajax/user/edit-user.php",
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
                    if (result.status == 'success') {
                        swal({
                            title: "success!",
                            text: "Your data updated successfully !",
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

})

