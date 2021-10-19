jQuery(document).ready(function () {

    $("#create").click(function (event) {
        event.preventDefault();

        if (!$('#email').val() || $('#email').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter email..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else {


//start preloarder
            $('.someBlock').preloader();
            //grab all form data  
            var formData = new FormData($("form#forget-password")[0]);

            $.ajax({
                url: "post-and-get/ajax/password/forget-password.php",
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
                            text: "Your email is correct..!!",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        window.setTimeout(function () {
                            window.location = 'reset-password.php';
                        }, 2000);

                    } else if (result.status === 'error') {

                        swal({
                            title: "Error!",
                            text: "Your email is wrong..!!",
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


