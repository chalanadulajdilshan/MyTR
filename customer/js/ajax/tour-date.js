$(document).ready(function () {


    //create tour date
    $('#create').click(function (event) {
        event.preventDefault();
        tinymce.triggerSave();

        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your tour day title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#description').val() || $('#description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your tour description..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else if (!$('#image_name').val() || $('#image_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your tour images..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {

            //loading
            $('.box').jmspinner('large');
            $('.box').addClass('well');
            $('.box').css('z-index', '9999');

            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "post-and-get/ajax/tour-day.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {

                    //end loading
                    $('.box').jmspinner(false);
                    $('.box').removeClass('well');
                    $('.box').css('z-index', '-1111');

                    swal({
                        title: "Success!",
                        text: "Your changes saved successfully!...",
                        type: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    }, function () {
                        setTimeout(function () {
                            window.location.replace("create-tour-date.php?id=" + result.id + "&&message=20")
                        }, 1500);
                    });
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });

//create tour date
    $('#update').click(function (event) {
        event.preventDefault();
        tinymce.triggerSave();

        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your tour day title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#description').val() || $('#description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your tour description..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else {

            //loading
            $('.box').jmspinner('large');
            $('.box').addClass('well');
            $('.box').css('z-index', '9999');

            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "post-and-get/ajax/tour-day.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {

                    //end loading
                    $('.box').jmspinner(false);
                    $('.box').removeClass('well');
                    $('.box').css('z-index', '-1111');

                    swal({
                        title: "Success!",
                        text: "Your changes saved successfully!...",
                        type: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    }, function () {
                        setTimeout(function () {
                            window.location.replace("edit-tour-date.php?id=" + result.id + "&&message=9")
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