$(document).ready(function () {

    //Create facility 
    $("#create-facility").click(function (event) {
        event.preventDefault();


        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#icion').val() || $('#icion').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter icion..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else {
            //start preloarder
            $('.someBlock').preloader();
            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "post-and-get/ajax/accommodation.php",
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
    $("#edit-facility").click(function (event) {
        event.preventDefault();


        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#icion').val() || $('#icion').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter icon..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {
            //start preloarder
            $('.someBlock').preloader();
            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "post-and-get/ajax/accommodation.php",
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

    //Create create accommodation type 
    $("#create-accommodation-type").click(function (event) {
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
                url: "post-and-get/ajax/accommodation.php",
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

    //Update accommadation type
    $("#update-accommodation-type").click(function (event) {
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
                url: "post-and-get/ajax/accommodation.php",
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

    //Create Room type 
    $("#create-room-type").click(function (event) {
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
                url: "post-and-get/ajax/accommodation.php",
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

    //Update Room type
    $("#update-room-type").click(function (event) {
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
                url: "post-and-get/ajax/accommodation.php",
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

    //Create Amenities Type
    $("#create-amenities-type").click(function (event) {
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
                url: "post-and-get/ajax/accommodation.php",
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

    //Update Amenities Type
    $("#update-amenities-type").click(function (event) {
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
                url: "post-and-get/ajax/accommodation.php",
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

    //Create Amenities
    $("#create-amenities").click(function (event) {
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
                url: "post-and-get/ajax/accommodation.php",
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

    //Update Amenities  
    $("#update-amenities").click(function (event) {
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
                url: "post-and-get/ajax/accommodation.php",
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

    //update location
    $("#update-location").click(function (event) {
        event.preventDefault();
        tinymce.triggerSave();

//        if (!$('#map').val() || $('#map').val().length === 0) {
//            swal({
//                title: "Error!",
//                text: "Please enter map code..!",
//                type: 'error',
//                timer: 1500,
//                showConfirmButton: false
//            });
//        } else {
        //start preloarder
        $('.someBlock').preloader();
        var formData = new FormData($('#form-data')[0]);
        $.ajax({
            url: "post-and-get/ajax/accommodation.php",
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
//        }
    });
    
   
});

