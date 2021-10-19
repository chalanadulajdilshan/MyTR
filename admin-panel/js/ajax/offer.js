$(document).ready(function () {

    $("#start_date").change(function () {
        $('#offer_duration').removeAttr("disabled");
    });

    //Create
    $("#create").click(function (event) {
        event.preventDefault();

        if (!$('#category').val() || $('#category').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select Offer Category..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter Offer Title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else if (!$('#start_date').val() || $('#start_date').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter Offer Start Date..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#end_date').val() || $('#end_date').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter Offer End Date..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#offer_presentage').val() || $('#offer_presentage').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter Presentage..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#image_name').val() || $('#image_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter Image Name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#short_description').val() || $('#short_description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter short description..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else {

            //start preloarder
            $('.someBlock').preloader();

            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "post-and-get/ajax/offers.php",
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
                            window.location.replace("create-offer.php");
                        }, 1500);
                    });
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });

    //update
    $("#update").click(function (event) {
        event.preventDefault();
        if (!$('#category').val() || $('#category').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select Offer Category..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter Offer Title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else if (!$('#start_date').val() || $('#start_date').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter Offer Start Date..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#end_date').val() || $('#end_date').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter Offer End Date..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#offer_presentage').val() || $('#offer_presentage').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter Presentage..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#image_name').val() || $('#image_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter Image Name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#short_description').val() || $('#short_description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter short description..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else {

            //start preloarder
            $('.someBlock').preloader();

            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "post-and-get/ajax/offers.php",
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
                            window.location.replace("edit-offer.php?id=" + result.id);
                        }, 1500);
                    });
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });


    //cal offer durations and price
    $("#offer_duration").change(function () {

        var id = $(this).val();
        var start_date = $('#start_date').val();

        $.ajax({
            url: "post-and-get/ajax/custome.php",
            type: "POST",
            data: {
                id: id,
                option: 'GET_DURATION_VAL'},
            dataType: 'json',
            success: function (result) {


                var date = new Date(start_date);

                date.setDate(date.getDate() + parseInt(result.dates));

                var dd = date.getDate();
                var mm = date.getMonth() + 1;
                var y = date.getFullYear();

                var end_date = y + '-' + mm + '-' + dd;


                $('#end_date').val(end_date);
                $('#price').val(result.price);
            }
        });

    });
});
