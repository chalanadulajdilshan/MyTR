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
 



});