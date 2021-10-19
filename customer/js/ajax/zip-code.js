
$(document).ready(function () {
    $('#city').change(function () {

        var cityID = $(this).val();
        //start preloarder
        $('.someBlock').preloader();

        $('#zip_code').empty();
        $.ajax({
            url: "post-and-get/ajax/zip-code.php",
            type: "POST",
            data: {
                city: cityID,
                action: 'GET_ZIP_CODE_BY_CITY'
            },
            dataType: "JSON",
            success: function (jsonStr) {

                //remove preloarder
                $('.someBlock').preloader('remove');
                
                $('#zip_code').val(jsonStr);
            }
        });
    });
});

