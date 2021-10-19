$(document).ready(function () {
    $('#wrapper').on('change', '.val_change', function (e) {
        e.preventDefault();

//pick up date and time
        var pick_up_date = $('#pick_up_date').val();
        var pick_up_time = $('#pick_up_time').val();

//drop date and time
        var return_date = $('#return_date').val();
        var return_time = $('#return_time').val();

//other values
        var package_price = $('#package_price').val();
        var curancy = $('#curancy').val();

        var startDay = new Date(pick_up_date);
        var endDay = new Date(return_date);
        var millisecondsPerDay = 1000 * 60 * 60 * 24;
        var millisBetween = endDay.getTime() - startDay.getTime();
        var days = millisBetween / millisecondsPerDay;
        var star_date = moment(startDay);
        var end_date = moment(endDay);

//empty value
        $('#pick_up_date_append').empty();
        $('#return_date_append').empty();
        $('#end_date').empty();
        $('#start_day_name').empty();
        $('#end_date_name').empty();
        $('#days_count').empty();
        $('#start_date').empty();
        $('#end_date').empty();
        $('#days').empty();
        $('#days_append').empty();
        $('#package_price_append').empty();
        $('#curancy').empty();
        
//Append value
        $('#pick_up_date_append').append(star_date.format("YYYY-MM-DD") + ' ' + pick_up_time);
        $('#start_date').append(star_date.format("YYYY-MM-DD"));
        $('#return_date_append').append(end_date.format("YYYY-MM-DD") + ' ' + return_time);
        $('#end_date').append(end_date.format("YYYY-MM-DD"));
        $('#start_day_name').append(star_date.format("dd"));
        $('#end_date_name').append(end_date.format("dd"));

        if (days != 1) {
            $('#days_count').append(' for  ' + days + ' ' + ' Days');
        } else {
            $('#days_count').append(' for  ' + days + ' ' + ' Day');
        }


        $('#days').val(days);
        $('#days_append').append(days);
        $('#package_price_append').append(curancy+ package_price * days);

        $('#start_date').star_date(star_date.format("YYYY-MM-DD"));
        $('#wrapper').focusin();
    });

});


