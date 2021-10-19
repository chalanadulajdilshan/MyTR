$(document).ready(function () {

    //all hotels
    filter_data();
    
    //selector
    $('#search').click(function () {
        filter_data();

    });
    
    //filter product
    function filter_data() {


        $('.filter_data').empty();

        var city = $('#city').val();
        var rooms = $('#rooms').val();
        var adults = $('#adults').val();

        ////////////////////
        var pagelimit = $('#pagelimit').val();
        var page = $('#page').val();
        var setlimit = $('#setlimit').val();
        //
        //start preloarder
        $('.someBlock').preloader();

        $.ajax({
            url: "post-and-get/ajax/search-hotel.php",
            type: "POST",
            data: {
                city: city,
                rooms: rooms,
                adults: adults,
                //////////////
                pagelimit: pagelimit,
                setlimit: setlimit,
                action: 'SEARCH_HOTELS'
            },
            success: function (data) {

                //remove preloarder
                $('.someBlock').preloader('remove');
                $.ajax({
                    url: "post-and-get/ajax/search-hotel.php",
                    type: "POST",
                    data: {
                        city: city,
                        rooms: rooms,
                        adults: adults,
                        ////////
                        page: page,
                        setlimit: setlimit,
                        action: 'SHOWPAGINATION'
                    },
                    dataType: 'json',
                    success: function (show_pagination) {
                        $('#show_pagination').empty();
                        $('#show_pagination').append(show_pagination);
                    }
                });
                count_acc();
                $('.filter_data').append(data);

            }
        });
    }


//count accommodations
    function count_acc() {
        var city = $('#city').val();

        $.ajax({
            url: "post-and-get/ajax/search-hotel.php",
            type: "POST",
            data: {
                city: city,
                //////// 
                action: 'COUNT_ACC'
            },
            success: function (count) {
                alert(count);
                $('#count_acc').empty();
                $('#count_acc').append(count);
            }
        });
    }

//filter hotel

    $('#show_pagination').on('click', '.page', function () {


        $('.filter_data').empty();

        var city = $('#city').val();
        var rooms = $('#rooms').val();
        var adults = $('#adults').val();

        ///////////////////////
        var setlimit = $('#setlimit').val();
        var page = $(this).attr('page');

        var pagelimit = (page * setlimit) - setlimit;
//start preloarder
        $('.someBlock').preloader();

        $.ajax({
            url: "post-and-get/ajax/search-hotel.php",
            type: "POST",
            data: {
                city: city,
                rooms: rooms,
                adults: adults,
                //////////////
                pagelimit: pagelimit,
                setlimit: setlimit,
                action: 'SEARCH_HOTELS'
            },
            success: function (data) {
//remove preloarder
                $('.someBlock').preloader('remove');

                $.ajax({
                    url: "post-and-get/ajax/search-hotel.php",
                    type: "POST",
                    data: {
                        city: city,
                        rooms: rooms,
                        adults: adults,
                        //////////
                        page: page,
                        setlimit: setlimit,
                        action: 'SHOWPAGINATION'
                    },
                    success: function (show_pagination) {
                        $('#show_pagination').empty();
                        $('#show_pagination').append(show_pagination);
                    }
                });
                count_acc();
                $('.filter_data').append(data);

            }
        });
    });


});