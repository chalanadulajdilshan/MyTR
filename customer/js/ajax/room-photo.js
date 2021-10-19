$(document).ready(function () {

//addd room photos 
    $('#add-room-img').change(function () {

        //start preloarder
        $('.someBlock').preloader();

        var formData = new FormData($('#form-data')[0]);

        $.ajax({
            url: "post-and-get/ajax/room-photo.php",
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
                html += '<a href="#"  class="  delete-room-img"  id="' + mess.filename + '" remove="' + arr[0] + '"><i class="bx bxs-trash delete-btn-p" ></i> </a>';
                html += '<img src="../upload/accommodation/gallery/room/thumb/' + mess.filename + '"  class="img img-responsive  " style="width: 100%;">';
                html += '<input type="hidden" id="room_photo" name="add-images[]" value="' + mess.filename + '"/>';
                html += '</div>';
                $('#image-list').append(html);

                $('#loading').hide();
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });

//Delete Room photo
    $('#image-list').on('click', '.delete-room-img', function () {

        //start preloarder
        $('.someBlock').preloader();

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
                url: "post-and-get/ajax/room-photo.php",
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

                        $('#remove' + remove).remove();

                    }
                }
            });
        });
    });

//Delete room photo
    $('.delete-room-photo').click(function () {


        //start preloarder
        $('.someBlock').preloader();

        var id = $(this).attr("data-id");

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
                url: "post-and-get/ajax/room-photo.php",
                type: "POST",
                data: {id: id, action: 'delete-room-photo'},
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

                        $('#div' + id).remove();

                    }
                }
            });
        });
    });
});

