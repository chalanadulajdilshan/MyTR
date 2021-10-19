$(document).ready(function () {
    $('#airDatepickerRange-hotel').on('change', '#check_in_date ,#check_out_date,#rooms', function () {


        var start = $('#check_in_date').val();
        var end = $('#check_out_date').val();
        var room_name = $('#room_name').val();
        var available_rooms = $('#available_rooms').val();
        var rooms = $('#rooms').val();
        var room_price = $('.room_price').val();
        $('.disply-row').show();

        var startDay = new Date(start);
        var endDay = new Date(end);
        var millisecondsPerDay = 1000 * 60 * 60 * 24;

        var millisBetween = endDay.getTime() - startDay.getTime();
        var days = millisBetween / millisecondsPerDay;




        var star_date = moment(startDay);
        var end_date = moment(endDay);


//empty value
        $('#days').empty();
        $('#start_date').empty();
        $('#end_date').empty();
        $('#start_day_name').empty();
        $('#endDay_name').empty();
        $('#room_name_append').empty();
        $('.room_price').empty();

//Append value
        $('#days').append(days);
        $('#start_date').append(star_date.format("YYYY-MM-DD"));
        $('#start_day_name').append(star_date.format("dd"));


        if (end_date.format("YYYY-MM-DD") != 'Invalid date') {
            $('#end_date').append(end_date.format("YYYY-MM-DD"));
            $('#endDay_name').append(end_date.format("dd"));
            $('#room_name_append').append(room_name);

            if (rooms > available_rooms) {
                swal({
                    title: "Error!",
                    text: "This Room Type has only " + available_rooms + " rooms",
                    type: 'error',
                    timer: 3000,
                    showConfirmButton: false
                });
                $('#rooms').val(rooms - 1);
            } else {
                $('#per_night').empty();
                $('#price').empty();
                $('#price_stay').empty();
                $('.price_stay').empty();
                $('#total_price').empty();

                var rooms_per_night = rooms * (room_price * days);

                $('#per_night').append(days + ' nights x ' + rooms);
                $('#price_stay').append(days + ' night-stay ');
                $('#price').append('$' + rooms_per_night.toLocaleString() + '.00');
                $('.price_stay').append('$' + rooms_per_night.toLocaleString() + '.00');
                $('#total_price').val(rooms_per_night);
            }


        }


    });
});


