
$(document).ready(function () {

//Addd Rent a car Driving licine front
    $('#licen_front').change(function () {

        //start preloarder
        $('.someBlock').preloader();
        
        var formData = new FormData($('#form-data')[0]);
        
        $.ajax({
            url: "post-and-get/ajax/driving-licinse-front.php",
            type: "POST",
            data: formData,
            async: false,
            dataType: 'json',
            success: function (mess) {

                //remove preloarder
                $('.someBlock').preloader('remove');

                $("#licen_front_image_name").val(mess.filename);
                $("#licen_front_img").attr("src", "../upload/rent-a-car/license/front/thumb/" + mess.filename);

            },
            cache: false,
            contentType: false,
            processData: false
        });

    });


    //Addd Rent a car Driving licine back
    $('#licen_back').change(function () {

        //start preloarder
        $('.someBlock').preloader();

        var formData = new FormData($('#form-data')[0]);
        $.ajax({
            url: "post-and-get/ajax/driving-licinse-back.php",
            type: "POST",
            data: formData,
            async: false,
            dataType: 'json',
            success: function (mess) {

                //remove preloarder
                $('.someBlock').preloader('remove');

                $("#licen_back_image_name").val(mess.filename);
                $("#licen_back_img").attr("src", "../upload/rent-a-car/license/back/thumb/" + mess.filename);

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


});