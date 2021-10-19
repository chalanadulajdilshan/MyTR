$(document).ready(function () {

 

    //check box cked
    $("#pickupnearest").change(function (event) {

        if (this.checked) {
            $("#picklocation").css("display", "block");
            $("#pickuphome").css("display", "none");

            //append pick up method
            $("#pick_up_method_append").empty();
            var pick_up_method = $("#pickupnearest").val();
            $("#pick_up_method_append").append(pick_up_method);
        }
    });

    $("#pickuphomedelivery").change(function (event) {
        if (this.checked) {
            $("#picklocation").css("display", "block");
            $("#pickuphome").css("display", "block");

            //pick up home  method append
            $("#pick_up_method_append").empty();
            var pick_up_method = $("#pickuphomedelivery").val();
            $("#pick_up_method_append").append(pick_up_method);

        } else {
            $("#pickupnearest").prop("checked") == false
        }
    });

    //check box cked
    $("#dropupnearest").change(function (event) {
        if (this.checked) {
            $("#dropuphome").css("display", "block");
            $("#dropuphome").css("display", "none");

            //drop method
            $("#drop_method_append").empty();
            var drop_up_method = $("#dropupnearest").val();
            $("#drop_method_append").append(drop_up_method);
        }
    });

    $("#dropuphomedelivery").change(function (event) {
        if (this.checked) {
            $("#dropuphome").css("display", "block");

            //drop method
            $("#drop_method_append").empty();
            var drop_up_method = $("#dropuphomedelivery").val();
            $("#drop_method_append").append(drop_up_method);
        } else {
            $("#dropupnearest").prop("checked") == false
        }
    });



});