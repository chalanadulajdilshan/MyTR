jQuery(document).ready(function () {

    $("#create").click(function () {
      
        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter tour type name..!",
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
                url: "post-and-get/ajax/tour-type.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
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

    $("#update").click(function () {

        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter tour type name..!",
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
                url: "post-and-get/ajax/tour-type.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
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
                                window.location.replace("edit-tour-type.php?id=" + result.id);
                            }, 1500);
                        });
                    
                }
            });

        }
        return false;
    });


});


