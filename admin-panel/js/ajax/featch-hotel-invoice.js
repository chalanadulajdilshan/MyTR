$(document).ready(function () {


    //invoices for this month 
    filter_data();

    //filter product
    function filter_data() {
        $('.filter_data').empty();
        
        var date_range = $('.date_range').val();
        var search_key = $('input[type="search"]').val();
         
        $.ajax({
            url: "post-and-get/ajax/featch-hotel-invoice.php",
            type: "POST",
            data: {
                date_range: date_range,
                search_key: search_key,
                action: 'GET_FILTER_HOTELS_BOOKINGS'
            },
            success: function (data) {

                $('.filter_data').empty();
                $('.filter_data').append(data);

            }
        });
    }



    //selector
    $('.common_selector').change(function () {
        $('.filter_data').empty();
        filter_data();
    });

    $('.date_range').change(function () {
        $('.filter_data').empty();
        filter_data();
    });

    //selector
    $('.applyBtn').click(function () {
        $('.filter_data').empty();
        filter_data();
    });
    $('input[type="search"]').keyup(function () {
        $('.filter_data').empty();
        filter_data();
    });



});