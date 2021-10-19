$(document).ready(function () {

    //Create room
    $('.add-facility').click(function (event) {
        event.preventDefault();

        //start preloarder
        $('.someBlock').preloader();

        if ($(this).is(":checked")) {
            var id = $(this).attr("data-id");
            var acc_id = $(this).attr("acc_id");
            $.ajax({
                url: "post-and-get/ajax/add-facility.php",
                type: "POST",
                data: {
                    facility: id,
                    id: acc_id,
                    option: 'update_facility'},
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
        } else {
            //start preloarder
            $('.someBlock').preloader();

            var id = $(this).attr("data-id");
            var acc_id = $(this).attr("acc_id");

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
                    url: "post-and-get/ajax/add-facility.php",
                    type: "POST",
                    data: {
                        id: id,
                        acc_id: acc_id,
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