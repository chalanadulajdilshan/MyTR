jQuery(document).ready(function () {

//creare services
    $("#create").click(function () {
        tinymce.triggerSave();
        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the name..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#image_name').val() || $('#image_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Enter Image..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#short_description').val() || $('#short_description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Enter Short Description..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
         
        } else if (!$('#description').val() || $('#description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Enter   Description..!",
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
                url: "post-and-get/ajax/service.php",
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
    
    
    //update services
    $("#update").click(function () {
        tinymce.triggerSave();
        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Enter Activity Name..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#image_name').val() || $('#image_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Enter Image..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#short_description').val() || $('#short_description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Enter Short Description..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
      
        } else if (!$('#description').val() || $('#description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Enter   Description..!",
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
                url: "post-and-get/ajax/service.php",
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
                            showConfirmButton: false,
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




