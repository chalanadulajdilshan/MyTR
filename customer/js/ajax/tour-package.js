$(document).ready(function () {

//Select Packages   
    $('.check-select').click(function () {
        var id = $(this).attr("data-id");
        if ($(this).prop("checked") == true) {
            swal({
                title: "Info!",
                text: "Please Add your tour price now.!",
                type: 'info',
                timer: 4000,
                showConfirmButton: true
            });
            $('#price' + id).show();
        }

        else if ($(this).prop("checked") == false) {

            $('#price' + id).hide();
        }

    });
//create tour selected
    $('.dataTable').on('click', '.create-selected', function (event) {
        event.preventDefault();

        var tour_id = $(this).attr("data-id");

        if (!$('#price' + tour_id).val() || $('#price' + tour_id).val().length === 0) {

            swal({
                title: "Error!",
                text: "Please enter your tour package price..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            }, function () {
                setTimeout(function () {
                    window.location.reload();
                }, 1500);
            });


        } else {
 
            var customer_id = $(this).attr("customer-id");
            var company_id = $(this).attr("company-id");
            var price = $('#price' + tour_id).val();
            var include = $('#include' + tour_id).val();
            var exclude = $('#exclude' + tour_id).val();

            $('#customCheck' + tour_id).attr('disabled', 'disabled');
            $('#customCheck2' + tour_id).attr('disabled', 'disabled');

            //loading
            $('.box').jmspinner('large');
            $('.box').addClass('well');
            $('.box').css('z-index', '9999');
            $.ajax({
                url: "post-and-get/ajax/tour-package.php",
                type: "POST",
                data: {
                    tour_id: tour_id,
                    customer_id: customer_id,
                    company_id: company_id,
                    price: price,
                    exclude: exclude,
                    include: include,
                    option: 'SELECT_PACKAGES'
                },
                dataType: "JSON",
                success: function (result) {

                    //end loading
                    $('.box').jmspinner(false);
                    $('.box').removeClass('well');
                    $('.box').css('z-index', '-1111');


                    swal({
                        title: "Success!",
                        text: "Your are added class saved successfully!.....",
                        type: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    }, function () {
                        setTimeout(function () {
                            window.location.replace("create-tour-packages.php?id=" + company_id + "&&message=10")
                        }, 1500);
                    });
                },
            });
        }
    });

//Create Tour package 
    $('#create-tour-package').click(function (event) {
        event.preventDefault();
        tinymce.triggerSave();


        if (!$('#type').val() || $('#type').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select your tour type..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your tour title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#dates').val() || $('#dates').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your tour dates..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#price').val() || $('#price').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Tour Package price..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#description').val() || $('#description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Tour description..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#include_and_exclude ').val() || $('#include_and_exclude').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your include and exclude..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });


        } else {

            //loading
            $('.box').jmspinner('large');
            $('.box').addClass('well');
            $('.box').css('z-index', '9999');


            var formData = new FormData($('#form-data-own')[0]);
            $.ajax({
                url: "post-and-get/ajax/tour-package.php",
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
                            window.location.replace("create-tour-date.php?id=" + result.id + "&&message=10")
                        }, 1500);
                    });
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });
 
//Update Tour package
    $('#update-tour-package').click(function (event) {
        event.preventDefault();
        tinymce.triggerSave();
        if (!$('#type').val() || $('#type').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select your tour type..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your tour title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#dates').val() || $('#dates').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your tour dates..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#price').val() || $('#price').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Tour Package price..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#description').val() || $('#description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Tour description..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#include_and_exclude ').val() || $('#include_and_exclude').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your include and exclude..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {

            //loading
            $('.box').jmspinner('large');
            $('.box').addClass('well');
            $('.box').css('z-index', '9999');


            var formData = new FormData($('#form-data-own')[0]);
            $.ajax({
                url: "post-and-get/ajax/tour-package.php",
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
                            window.location.replace("edit-custome-tour-packages.php?id=" + result.id + "&&message=9")
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