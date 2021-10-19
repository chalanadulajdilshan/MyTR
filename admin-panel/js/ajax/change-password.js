jQuery(document).ready(function () {

    $("#change").click(function (event) {
        event.preventDefault();
        if (!$('#oldPass').val() || $('#oldPass').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter old Password..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#newPass').val() || $('#newPass').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter new password..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#confPass').val() || $('#confPass').val().length === 0) {
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
            var formData = new FormData($("form#change-password_data")[0]);

            $.ajax({
                url: "post-and-get/ajax/password/change-password.php",
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
                            text: "password was change successfully ..!!",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        window.setTimeout(function () {
                            window.location = 'login.php';
                        }, 2000);

                    } else if (result.status === 'error') {

                        swal({
                            title: "Error!",
                            text: "There was some error..!!",
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


