$(document).ready(function () {


//add menu photo
    $('#add-menu-img').change(function () {
        event.preventDefault();

        $('.someBlock').preloader();

        var formData = new FormData($('#form-data')[0]);

        $.ajax({
            url: "post-and-get/ajax/menu-photo.php",
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
                html += '<a href="#"  class="  delete-menu-img"  id="' + mess.filename + '" remove="' + arr[0] + '"><i class="bx bxs-trash delete-btn-p" ></i> </a>';
                html += '<img src="../upload/restaurant/menu/thumb/' + mess.filename + '"  class="img img-responsive  " style="width: 100%;">';
                html += '<input type="hidden" id="image_name" name="add-images[]" value="' + mess.filename + '"/>';
                html += '</div>';
                $('#image-list').append(html);

                $('#loading').hide();
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });


//Delete menu image
    $('#image-list').on('click', '.delete-menu-img', function () {

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
                url: "post-and-get/ajax/menu-photo.php",
                type: "POST",
                data: {
                    id: id,
                    action: 'delete'
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



//create menu photo
    $('#create').click(function (event) {
        event.preventDefault();

        //start preloarder
        $('.someBlock').preloader();

        var formData = new FormData($('#form-data')[0]);
        $.ajax({
            url: "post-and-get/ajax/create-menu-photo.php",
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
                        window.location.replace("create-menu-photo.php?id=" + result.id + "&&message=9")
                    }, 1500);
                });
            },
            cache: false,
            contentType: false,
            processData: false
        });

    });


});

