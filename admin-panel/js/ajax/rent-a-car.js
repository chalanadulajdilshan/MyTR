$(document).ready(function () {

    //Create facility 
    $("#create-rent-car-feature").click(function (event) {
        event.preventDefault();


        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter title..!",
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
                        text: "Your data was saved successfully!.....",
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

    //Update facility
    $("#update-rent-car-feature").click(function (event) {
        event.preventDefault();


        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter title..!",
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

    //Create create vehicle type 
    $("#create-vehicle-type").click(function (event) {
        event.preventDefault();


        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter title..!",
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
                        text: "Your data was saved successfully!.....",
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

    //Update vehicle type
    $("#update-vehicle-type").click(function (event) {
        event.preventDefault();


        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter title..!",
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

    //Create vehicle Brand
    $("#create-vehicle-brand").click(function (event) {
        event.preventDefault();


        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter title..!",
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
                        text: "Your data was saved successfully!.....",
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

    //Update vehicle brand
    $("#update-vehicle-brand").click(function (event) {
        event.preventDefault();


        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter title..!",
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

    //active rent car company
    $('#active_company').click(function (event) {
        
        event.preventDefault();
        tinymce.triggerSave();

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

    });
});

