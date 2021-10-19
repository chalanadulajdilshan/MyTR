

$(document).ready(function () {
    
    $('#months').change(function () {

        //start preloarder
        $('.someBlock').preloader();

        var months = $(this).val();
 

        $.ajax({
            url: "post-and-get/ajax/publish-payment.php",
            type: "POST",
            data: {
                months: months,
                action: 'GETPAYMENT'
            },
            dataType: "JSON",
            success: function (jsonStr) {
              
                //remove preloarder
                $('.someBlock').preloader('remove');

                
                $('#payment').empty();
                $('#payment').val(jsonStr);
            }
        });
    });
});

