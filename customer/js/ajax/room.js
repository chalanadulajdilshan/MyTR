$(document).ready(function () {

//Add bed room option
    $('#add-room').click(function () {
        var id = $(this).attr("data-id");

        var count = id;
        count++;
        $("#add-room").attr("data-id", +count);

        var html = '';
        html += '<div data-repeater-item id="div' + count + '">';
        html += '<div class="row justify-content-between">';
        html += '<div class="col-md-4 col-sm-12 form-group">';
        html += '<label for ="Email"> What kind of beds room? </label>';
        html += '<input type="text" class ="form-control" placeholder = "What kind of beds room" name = "bed_name[]">';
        html += '</div>';
        html += '<div class="col-md-2 col-sm-12 form-group">';
        html += '<label for="password"> Number Of Beds </label>';
        html += '<input type="number" class ="touchspin form-control" min="1" value="1" name="num_bed[]">';
        html += '</div>';
        html += '<div class="col-md-2 col-sm-12 form-group">';
        html += '<label for="gender"> No of guests can stay </label>';
        html += '<input type="number" class="touchspin form-control" value="1"  min="1" name="guest_stay[]">';
        html += '</div>';
        html += '<div class="col-md-2 col-sm-12 form-group" style= "margin-top: 30px;">';
        html += '<center>';
        html += '<fieldset>';
        html += '<div class="checkbox checkbox-primary">';
        html += '<input type="checkbox" id = "colorCheckboxfe1r' + count + '"   name = "extra_bed[]" value = "1">';
        html += '<label for="colorCheckboxfe1r' + count + '"> Extra Beds Option </label>';
        html += '</div>';
        html += '</fieldset>';
        html += '</center>';
        html += '</div>';

        html += '<div class = "col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">';
        html += '<button class = "btn btn-danger text-nowrap px-1 delete"    delete_id="' + count + '" type = "button"> <i  class = "bx bx-x"> </i> Delete  </button>';
        html += '</div>';
        html += '</div>';
        html += '<hr>';
        html += '</div>';
        $('#add-room-append').append(html);

    });

//Delete add bed room option
    $('#add-room-append').on('click', '.delete', function () {
        var id = $(this).attr("delete_id");
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        },
        function (isConfirm) {
            if (isConfirm) {
                swal({
                    title: "Deleted!",
                    text: "Your imaginary file has been deleted.",
                    type: 'success',
                    timer: 2000,
                    showConfirmButton: false
                });
                $('#div' + id).remove();
            } else {
                swal.close();
            }
        });

    });


//Create room
    $('#create').click(function (event) {
        event.preventDefault();
        tinymce.triggerSave();

        if (!$('#room_type').val() || $('#room_type').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your room type..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your room name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#num_of_rooms').val() || $('#num_of_rooms').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter number of rooms..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#smoking_policy').val() || $('#smoking_policy').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select smoking policy in room..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#max_person').val() || $('#max_person').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter maximum persons in this room..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#price').val() || $('#price').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter price for one night..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#room_photo').val() || $('#room_photo').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please add room photos..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#description').val() || $('#description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please add room description..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {

            //start preloarder
//            $('.someBlock').preloader();

            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "post-and-get/ajax/rooms.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {
                    alert(result.id);
                    //remove preloarder
//                    $('.someBlock').preloader('remove');

                    swal({
                        title: "Success!",
                        text: "Your changes saved successfully!...",
                        type: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    }, function () {
                        setTimeout(function () {
                            window.location.replace("create-room.php?id=" + result.id + "&&message=10");

                        }, 1500);
                    });
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });


//Update room
    $('#update').click(function (event) {
        event.preventDefault();
        tinymce.triggerSave();

        if (!$('#room_type').val() || $('#room_type').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your room type..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your room name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#num_of_rooms').val() || $('#num_of_rooms').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter number of rooms..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#smoking_policy').val() || $('#smoking_policy').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select smoking policy in room..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#max_person').val() || $('#max_person').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter maximum persons in this room..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#price').val() || $('#price').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter price for one night..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
    
        } else if (!$('#description').val() || $('#description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please add room description..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {

            //start preloarder
            $('.someBlock').preloader();

            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "post-and-get/ajax/rooms.php",
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
                            window.location.replace("edit-room.php?id=" + result.id + "&&message=9");

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