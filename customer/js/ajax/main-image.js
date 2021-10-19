$(document).ready(function () {

//accommodation main image   
    $('#main_img').change(function () {

        //start preloarder
        $('.someBlock').preloader();

        var formData = new FormData($('#form-data')[0]);
        $.ajax({
            url: "post-and-get/ajax/main-image.php",
            type: "POST",
            data: formData,
            async: false,
            dataType: 'json',
            success: function (mess) {

                //remove preloarder
                $('.someBlock').preloader('remove');

                $(".delete-btn-p").show();
                $("#del-hotel").val(mess.filename);
                $("#main-img").attr("src", "../upload/accommodation/gallery/thumb/" + mess.filename);

            },
            cache: false,
            contentType: false,
            processData: false
        });


    });

//Rent a car main img
    $('#main_img_rent_car').change(function () {

        //start preloarder
        $('.someBlock').preloader();

        var formData = new FormData($('#form-data')[0]);
        $.ajax({
            url: "post-and-get/ajax/main-image.php",
            type: "POST",
            data: formData,
            async: false,
            dataType: 'json',
            success: function (mess) {

                //remove preloarder
                $('.someBlock').preloader('remove');

                $(".delete-btn-p").show();
                $("#del-vehicle").val(mess.filename);
                $("#main-img").attr("src", "../upload/rent-a-car/gallery/thumb/" + mess.filename);
            },
            cache: false,
            contentType: false,
            processData: false
        });

    });

//Tour main img
    $('#main_img_tour').change(function () {

        //start preloarder
        $('.someBlock').preloader();

        var formData = new FormData($('#form-data')[0]);
        $.ajax({
            url: "post-and-get/ajax/main-image.php",
            type: "POST",
            data: formData,
            async: false,
            dataType: 'json',
            success: function (mess) {

                //remove preloarder
                $('.someBlock').preloader('remove');

                $(".delete-btn-p").show();
                $("#del-tour").val(mess.filename);
                $("#main-img").attr("src", "../upload/tour-package/main/gallery/thumb/" + mess.filename);

            },
            cache: false,
            contentType: false,
            processData: false
        });

    });

//Tour package main img
    $('#tour_package_img').change(function () {

        //start preloarder
        $('.someBlock').preloader();

        var formData = new FormData($('#form-data-own')[0]);
        $.ajax({
            url: "post-and-get/ajax/main-image.php",
            type: "POST",
            data: formData,
            async: false,
            dataType: 'json',
            success: function (mess) {

                //remove preloarder
                $('.someBlock').preloader('remove');

                $(".delete-btn-p").show();
                $("#del-tour-package").val(mess.filename);
                $("#main-img").attr("src", "../upload/tour-package//main/gallery/thumb/" + mess.filename);

            },
            cache: false,
            contentType: false,
            processData: false
        });

    });
    
//Restaurant main img
    $('#restaurant_img_tour').change(function () {

        //start preloarder
        $('.someBlock').preloader();

        var formData = new FormData($('#form-data')[0]);
        $.ajax({
            url: "post-and-get/ajax/main-image.php",
            type: "POST",
            data: formData,
            async: false,
            dataType: 'json',
            success: function (mess) {

                //remove preloarder
                $('.someBlock').preloader('remove');

                $(".delete-btn-p").show();
                $("#del-restaurant-img").val(mess.filename);
                $("#main-img").attr("src", "../upload/restaurant//main/gallery/thumb/" + mess.filename);

            },
            cache: false,
            contentType: false,
            processData: false
        });

    });

//Delete Room
    $('#delete-hotel-img').click(function () {

        //start preloarder
        $('.someBlock').preloader();

        var id = $("#del-hotel").val();

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
                url: "post-and-get/ajax/main-image.php",
                type: "POST",
                data: {
                    id: id,
                    action: 'delete'
                },
                dataType: "JSON",
                success: function (jsonStr) {
                    //remove preloarder
                    $('.someBlock').preloader('remove');

                    if (jsonStr.status) {

                        swal({
                            title: "Deleted!",
                            text: "Your imaginary file has been deleted.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        $(".delete-btn-p").hide();
                        $("#main-img").attr("src", "app-assets/images/hotel-avatar.jpg");

                    }
                }

            });
        });
    });

//Delete rent car main img
    $('#delete-rent-car-img').click(function () {

        //start preloarder
        $('.someBlock').preloader();

        var id = $("#del-vehicle").val();

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
                url: "post-and-get/ajax/main-image.php",
                type: "POST",
                data: {
                    id: id,
                    action: 'delete-vehicle'
                },
                dataType: "JSON",
                success: function (jsonStr) {
                    //remove preloarder
                    $('.someBlock').preloader('remove');

                    if (jsonStr.status) {

                        swal({
                            title: "Deleted!",
                            text: "Your imaginary file has been deleted.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        $(".delete-btn-p").hide();
                        $("#main-img").attr("src", "app-assets/images/rent-car.jpg");

                    }
                }
            });
        });
    });

//Delete tour main image
    $('#delete-tour-main-img').click(function () {

        //start preloarder
        $('.someBlock').preloader();

        var id = $("#del-tour").val();

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
                url: "post-and-get/ajax/main-image.php",
                type: "POST",
                data: {
                    id: id,
                    action: 'delete-tour'
                },
                dataType: "JSON",
                success: function (jsonStr) {
                    //remove preloarder
                    $('.someBlock').preloader('remove');

                    if (jsonStr.status) {

                        swal({
                            title: "Deleted!",
                            text: "Your imaginary file has been deleted.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        $(".delete-btn-p").hide();
                        $("#main-img").attr("src", "app-assets/images/tour-main.jpg");

                    }
                }
            });
        });
    });

//Delete tour package image
    $('#delete_tour_package').click(function () {

        //start preloarder
        $('.someBlock').preloader();

        var id = $("#del-tour-package").val();

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
                url: "post-and-get/ajax/main-image.php",
                type: "POST",
                data: {
                    id: id,
                    action: 'delete-tour-package'
                },
                dataType: "JSON",
                success: function (jsonStr) {
                    //remove preloarder
                    $('.someBlock').preloader('remove');

                    if (jsonStr.status) {

                        swal({
                            title: "Deleted!",
                            text: "Your imaginary file has been deleted.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        $(".delete-btn-p").hide();
                        $("#main-img").attr("src", "app-assets/images/tour-main.jpg");

                    }
                }
            });
        });
    });

//Delete restaurant main image
    $('#delete-restaurant-img').click(function () {

        //start preloarder
        $('.someBlock').preloader();

        var id = $("#del-restaurant-img").val();
       
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
                url: "post-and-get/ajax/main-image.php",
                type: "POST",
                data: {
                    id: id,
                    action: 'delete-restaurant-img'
                },
                dataType: "JSON",
                success: function (jsonStr) {
                    //remove preloarder
                    $('.someBlock').preloader('remove');

                    if (jsonStr.status) {

                        swal({
                            title: "Deleted!",
                            text: "Your imaginary file has been deleted.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        $(".delete-btn-p").hide();
                        $("#main-img").attr("src", "app-assets/images/res-c.jpg");

                    }
                }
            });
        });
    });
    
    
    

});

