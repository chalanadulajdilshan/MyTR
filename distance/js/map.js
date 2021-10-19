$(document).ready(function () {


    var pickup;
    var destination;

    var options = {

        componentRestrictions: {country: "lk"}
    };
    var pickuplocation = document.getElementById('origin');
    var pickupAutocomplete = new google.maps.places.Autocomplete(pickuplocation, options);
    var returnlocation = document.getElementById('destination');
    var returnAutocomplete = new google.maps.places.Autocomplete(returnlocation, options);

      
    $(document).ready(function () {

        google.maps.event.addListener(returnAutocomplete, 'place_changed', function () {

            pickup = $('#origin').val();
            destination = $('#destination').val();

            if (destination && !pickup) {
                swal({
                    title: "Hey",
                    text: "Please select pickup location first",
                    type: 'error',
                    timer: 3000,
                    showConfirmButton: false
                }, );
                $('#destination').val("");
            } else if (destination === pickup) {
                swal({
                    title: "Hey",
                    text: "Please select differnt destination",
                    type: 'error',
                    timer: 3000,
                    showConfirmButton: false
                }, );
                $('#destination').val("");
            } else {
                calPrice();
            }
        });
    });
    function formatMoney(amount, decimalCount = 2, decimal = ".", thousands = ",") {
        try {
            decimalCount = Math.abs(decimalCount);
            decimalCount = isNaN(decimalCount) ? 2 : decimalCount;

            const negativeSign = amount < 0 ? "-" : "";

            let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
            let j = (i.length > 3) ? i.length % 3 : 0;

            return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
        } catch (e) {
            console.log(e)
    }
    }
    ;
    function calPrice() {
        $('#loading-img').show();
        $.ajax({
            url: "../distance/ajax/distance.php",
            type: "POST",
            data: {
                pickup: pickup,
                destination: destination
            },
            dataType: "JSON",
            success: function (jsonStr) {
                $('#display_vehicle').show();

                if ($(window).width() <= 420) {
                     $(".tp_overlay, .banner form.callus").css({"height": "600px", });
                }
                //empty val
                $('#distance_id').empty();
                $('#mini_car').empty();
                $('#car').empty();
                $('#van').empty();
                $('#vehicle_bar').empty();

                $('#mini_car_usd').empty();
                $('#car_usd').empty();
                $('#van_usd').empty();

                //append val LKR price
                $('#distance_id').append('Distance - ' + jsonStr.distance);
                $('#mini_car').append(formatMoney(jsonStr.price[0]));
                $('#car').append(formatMoney(jsonStr.price[1]));
                $('#van').append(formatMoney(jsonStr.price[2]));

                //append val USD price
                $('#mini_car_usd').append(jsonStr.price_usd[0]);
                $('#car_usd').append(jsonStr.price_usd[1]);
                $('#van_usd').append(jsonStr.price_usd[2]);

                //append radio values
                var min_price = 'Mini car - Price LKR - ' + formatMoney(jsonStr.price[0]) + ' / ' + 'USD - ' + formatMoney(jsonStr.price_usd[0]);
                var car_price = 'Car - Price LKR - ' + formatMoney(jsonStr.price[1]) + ' / ' + 'USD - ' + formatMoney(jsonStr.price_usd[1]);
                var van_price = 'Van - PriceLKR - ' + formatMoney(jsonStr.price[2]) + ' / ' + 'USD - ' + formatMoney(jsonStr.price_usd[2]);

                $('#min_price').val(min_price)
                $('#car_price').val(car_price)
                $('#van_price').val(van_price)

                $('#hide_option').hide();
                $('#loading-img').hide();

            }
        });
    }


});