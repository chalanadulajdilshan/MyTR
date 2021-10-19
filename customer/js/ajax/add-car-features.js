$(document).ready(function () {

    //add features 
    $('.add-features').click(function (event) {
        event.preventDefault();

        //start preloarder
        $('.someBlock').preloader();

        if ($(this).is(":checked")) {
            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "post-and-get/ajax/add-feauters.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {

                     //remove preloarder
                    $('.someBlock').preloader('remove');

                    swal({
                        title: "Success!",
                        text: "Your Features  was saved successfully!...",
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
            //start preloarder
            $('.someBlock').preloader();

            var id = $(this).attr("data-id");
            var car_id = $(this).attr("car");

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
                    url: "post-and-get/ajax/add-feauters.php",
                    type: "POST",
                    data: {
                        id: id,
                        car_id: car_id,
                        option: 'delete'},
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

                            window.location.reload();

                        }
                    }
                });
            });

        }

    });


});