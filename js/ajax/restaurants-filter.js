
$(document).ready(function () {


    //all tours
    filter_data();

    //filter product
    function filter_data() {


        $('.filter_data').html('');

        var serve_type = get_filter('serve_type');
        var start_rate = get_filter('start_rate');
        var district = get_filter('district');

        var pagelimit = $('#pagelimit').val();
        var page = $('#page').val();
        var setlimit = $('#setlimit').val();

        //start preloarder
        $('.someBlock').preloader();

        $.ajax({
            url: "post-and-get/ajax/serve-filter.php",
            type: "POST",
            data: {
                serve_type: serve_type,
                start_rate: start_rate,
                district: district,
                //////////////
                pagelimit: pagelimit,
                setlimit: setlimit,
                action: 'GET_FILTER_RESTAURANTS'
            },
            success: function (data) {
                //remove preloarder
                $('.someBlock').preloader('remove');
                //Show Pagination
                $.ajax({
                    url: "post-and-get/ajax/tour-filter.php",
                    type: "POST",
                    data: {
                        serve_type: serve_type,
                        start_rate: start_rate,
                        district: district,
                        ////////
                        page: page,
                        setlimit: setlimit,
                        action: 'SHOWPAGINATION'
                    },
                    success: function (show_pagination) {
                        $('#show_pagination').empty();
                        $('#show_pagination').append(show_pagination);
                    }
                });

                $('.filter_data').append(data);

            }
        });
    }


    //get filter data
    function get_filter(class_name) {


        var filter = [];
        $('.' + class_name + ':checked').each(function () {
            filter.push($(this).val());

        });

        return filter;

    }


    //selector
    $('.common_selector').click(function () {
        filter_data();

    });


//filter product
    $('#show_pagination').on('click', '.page', function () {

        $('.filter_data').html('');

        var serve_type = get_filter('serve_type');
        var start_rate = get_filter('start_rate');
        var district = get_filter('district');
        ///////////////////////
        var setlimit = $('#setlimit').val();
        var page = $(this).attr('page');

        var pagelimit = (page * setlimit) - setlimit;
        //start preloarder
        $('.someBlock').preloader();
        $.ajax({
            url: "post-and-get/ajax/tour-filter.php",
            type: "POST",
            data: {
                serve_type: serve_type,
                start_rate: start_rate,
                district: district,
                /////////
                pagelimit: pagelimit,
                setlimit: setlimit,
                action: 'GET_FILTER_TOURS'
            },
            success: function (data) {
                //remove preloarder
                $('.someBlock').preloader('remove');
                $.ajax({
                    url: "post-and-get/ajax/tour-filter.php",
                    type: "POST",
                    data: {
                        serve_type: serve_type,
                        start_rate: start_rate,
                        district: district,
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

                $('.filter_data').append(data);

            }
        });
    });


});