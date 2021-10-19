jQuery(document).ready(function () {

    $("#login-button").click(function (event) {
        event.preventDefault();
      
        if (!$('#username').val() || $('#username').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter username..!",
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


        } else {


//start preloarder
           
            //grab all form data  
            var formData = new FormData($("form#login")[0]);

            $.ajax({
                url: "post-and-get/ajax/login.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function (result) {
//remove preloarder
                   
                    if (result.status === 'success') {

                        swal({
                            title: "success!",
                            text: "Your login has success..!!",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        window.setTimeout(function () {
                            window.location = 'index.php?message=5';
                        }, 2000);

                    } else if (result.status === 'error') {

                        swal({
                            title: "Error!",
                            text: "user name or password is wrong..!",
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


