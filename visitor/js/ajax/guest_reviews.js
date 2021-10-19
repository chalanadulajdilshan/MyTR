$(document).ready(function () {

//create guest review Accommodation
    $('#create').click(function (event) {
        event.preventDefault();


        if (!$('#booking_id').val() || $('#booking_id').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your booking Id..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else if (!$('.star_rating').val() || $('.star_rating').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Review Stars..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Review Title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#review').val() || $('#review').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Review..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else {
            var formData = new FormData($('#form-data')[0]);

            $.ajax({
                url: "post-and-get/ajax/booking-id-check.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {

                    if (result.status == true) {
                        $.ajax({
                            url: "post-and-get/ajax/guest-review.php",
                            type: "POST",
                            data: formData,
                            async: false,
                            dataType: 'json',
                            success: function (result) {

                                swal({
                                    title: "Success!",
                                    text: "Your review is saved successfully!...",
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
                    } else {
                        swal({
                            title: "Warning.!",
                            text: "Your BOOKING ID is invalid.! Please check it again..",
                            type: 'warning',
                            timer: 2000,
                            showConfirmButton: true
                        }, function () {
                            setTimeout(function () {
                                window.location.reload();
                            }, 1500);
                        });

                    }

                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });

//update guest review Accommodation
    $('#update').click(function (event) {
        event.preventDefault();


        if (!$('#booking_id').val() || $('#booking_id').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your booking Id..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else if (!$('.star_rating').val() || $('.star_rating').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Review Stars..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Review Title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#review').val() || $('#review').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Review..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else {
            var formData = new FormData($('#form-data')[0]);

            $.ajax({
                url: "post-and-get/ajax/guest-review.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {
                    swal({
                        title: "Success!",
                        text: "Your Review is updated successfully!...",
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

//create guest review in tour company
    $('#create-guest-review-tour-company').click(function (event) {
        event.preventDefault();


        if (!$('#booking_id').val() || $('#booking_id').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your booking Id..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else if (!$('.star_rating').val() || $('.star_rating').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Review Stars..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Review Title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#review').val() || $('#review').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Review..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else {
            var formData = new FormData($('#form-data')[0]);

            $.ajax({
                url: "post-and-get/ajax/booking-id-check.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {

                    if (result.status == true) {
                        $.ajax({
                            url: "post-and-get/ajax/guest-review.php",
                            type: "POST",
                            data: formData,
                            async: false,
                            dataType: 'json',
                            success: function (result) {

                                swal({
                                    title: "Success!",
                                    text: "Your review is saved successfully!...",
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
                    } else {
                        swal({
                            title: "Warning.!",
                            text: "Your BOOKING ID is invalid.! Please check it again..",
                            type: 'warning',
                            timer: 2000,
                            showConfirmButton: true
                        }, function () {
                            setTimeout(function () {
                                window.location.reload();
                            }, 1500);
                        });

                    }

                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });

//update guest review in tour company
    $('#update-guest-review-tour-company').click(function (event) {
        event.preventDefault();


        if (!$('#booking_id').val() || $('#booking_id').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your booking Id..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else if (!$('.star_rating').val() || $('.star_rating').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Review Stars..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Review Title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#review').val() || $('#review').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Review..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else {
            var formData = new FormData($('#form-data')[0]);

            $.ajax({
                url: "post-and-get/ajax/guest-review.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {
                    swal({
                        title: "Success!",
                        text: "Your Review is updated successfully!...",
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
});