
$(document).ready(function () {

//Create Car
    $('#create').click(function (event) {
        event.preventDefault();
        tinymce.triggerSave();

        if (!$('#type').val() || $('#type').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your vehicle type..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#reg_number').val() || $('#reg_number').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your vehicle registration number..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#reg_year').val() || $('#reg_year').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your vehicle registration year..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#fuel_type').val() || $('#fuel_type').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your city..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#contact_name ').val() || $('#contact_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your contact name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#contact_number').val() || $('#contact_number').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your contact number..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else if (!$('#budget').val() || $('#budget').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your budget..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#num_passengers').val() || $('#num_passengers').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your number of passanger..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#num_doors').val() || $('#num_doors').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your number of doors..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#city').val() || $('#city').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your city..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#description').val() || $('#description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your  description..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {

            //start preloarder
            $('.someBlock').preloader();


            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "post-and-get/ajax/rent-a-car.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
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
                            window.location.reload();
                        }, 1500);
                    });
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });

//Update Car
    $('#update').click(function (event) {
        event.preventDefault();
        tinymce.triggerSave();

        if (!$('#type').val() || $('#type').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your vehicle type..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#reg_number').val() || $('#reg_number').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your vehicle registration number..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#reg_year').val() || $('#reg_year').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your vehicle registration year..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#fuel_type').val() || $('#fuel_type').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your city..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#contact_name ').val() || $('#contact_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your contact name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#contact_number').val() || $('#contact_number').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your contact number..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else if (!$('#budget').val() || $('#budget').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your budget..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#num_passengers').val() || $('#num_passengers').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your number of passanger..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#num_doors').val() || $('#num_doors').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your number of doors..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#origin').val() || $('#origin').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your city..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#description').val() || $('#description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Property description..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {

            //start preloarder
            $('.someBlock').preloader();

            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "post-and-get/ajax/rent-a-car.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
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
                            window.location.reload();
                        }, 1500);
                    });
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });

//Addd Rent a car 
    $('#add-vehicle-img').change(function () {

        //start preloarder
        $('.someBlock').preloader();

        var formData = new FormData($('#form-data')[0]);

        $.ajax({
            url: "post-and-get/ajax/rent-car-a-photo.php",
            type: "POST",
            data: formData,
            async: false,
            dataType: 'json',
            success: function (mess) {

                //remove preloarder
                $('.someBlock').preloader('remove');

                var arr = mess.filename.split('.');

                var html = '';
                html += '<div class="col-sm-3 " style="margin-top: 25px;" id="remove' + arr[0] + '">';
                html += '<a href="#"  class="  delete-car-img"  id="' + mess.filename + '" remove="' + arr[0] + '"><i class="bx bxs-trash delete-btn-p" ></i> </a>';
                html += '<img src="../upload/rent-a-car/gallery/thumb/' + mess.filename + '"  class="img img-responsive  " style="width: 100%;">';
                html += '<input type="hidden" name="add-images[]" value="' + mess.filename + '"/>';
                html += '</div>';
                $('#image-list').append(html);

                $('#loading').hide();
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });


//Delete rent car img
    $('#image-list,.image-list').on('click', '.delete-car-img', function () {

        var id = $(this).attr("id");
        var remove = $(this).attr("remove");

        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function () {
            $.ajax({
                url: "post-and-get/ajax/rent-car-a-photo.php",
                type: "POST",
                data: {
                    id: id,
                    option: 'delete'
                },
                dataType: "JSON",
                success: function (jsonStr) {
                    if (jsonStr.status) {

                        swal({
                            title: "Deleted!",
                            text: "Your imaginary file has been deleted.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });

                        $('#remove' + remove).remove();

                    }
                }
            });
        });
    });

//Delete rent a car query
    $('#delete').on('click', '.delete-car', function () {

        var id = $(this).attr("id");


        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function () {
            $.ajax({
                url: "post-and-get/ajax/rent-car-a-photo.php",
                type: "POST",
                data: {
                    id: id,
                    option: 'delete-car'
                },
                dataType: "JSON",
                success: function (jsonStr) {
                    if (jsonStr.status) {

                        swal({
                            title: "Deleted!",
                            text: "Your imaginary file has been deleted.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });


                        window.location.reload();

                    }
                }
            });
        });
    });

//Update-car-images
    $('#update-car-image').click(function (event) {
        event.preventDefault();

        var formData = new FormData($('#form-data')[0]);
        $.ajax({
            url: "post-and-get/ajax/rent-a-car.php",
            type: "POST",
            data: formData,
            async: false,
            dataType: 'json',
            success: function (result) {
                swal({
                    title: "Success!",
                    text: "Your changes saved successfully!...",
                    type: 'success',
                    timer: 2000,
                    showConfirmButton: false
                }, function () {
                    setTimeout(function () {
                        window.location.reload();
                    }, 1500);
                });
            },
            cache: false,
            contentType: false,
            processData: false
        });

    });

});