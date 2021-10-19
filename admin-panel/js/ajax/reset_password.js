jQuery(document).ready(function () {

    $("#create").click(function (event) {
        event.preventDefault();
        if (!$('#reset_code').val() || $('#reset_code').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter reset code..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#password').val() || $('#password').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter password..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#confirmpassword').val() || $('#confirmpassword').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter confirm password..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else {


//start preloarder
            $('.someBlock').preloader();
            //grab all form data  
            var formData = new FormData($("form#reset-password")[0]);

            $.ajax({
                url: "post-and-get/ajax/password/reset-password.php",
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
                            text: "password was reset successfully ..!!",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        window.setTimeout(function () {
                            window.location = 'index.php';
                        }, 2000);

                    } else if (result.status === 'error') {

                        swal({
                            title: "Error!",
                            text: "please check your reset code..!!",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    } else if (result.status === 'password_not_match') {

                        swal({
                            title: "Error!",
                            text: "new password and confirm password does not match .!!",
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


