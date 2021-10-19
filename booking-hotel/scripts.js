
//--------------------------------------------------check one by one on blur--------------------------------------------------
jQuery(document).ready(function () {

    jQuery("#txtMessage").blur(function () {
        validateEmpty("txtMessage", "spanMessage");
    });

    jQuery("#check_in_date").blur(function () {
        validateEmpty("check_in_date", "spanCheckIn");
    });

    jQuery("#check_out_date").blur(function () {
        validateEmpty("check_out_date", "spanCheckOut");
    });

    jQuery("#rooms").blur(function () {
        validateEmpty("rooms", "spanRooms");
    });



    jQuery("#captchacode").blur(function () {
        validateEmpty("captchacode", "capspan");
    });

    jQuery("#btnSubmit").bind('click', function () {



        if (!validate()) {
            if ($('#acceptTerm').is(":not(:checked)")) {
                $('#tearm_valid').empty();
                $('#tearm_valid').append('Please accept our tearm and conditions')

            } else {
                return;
            }
        }

        jQuery("#checking").show();
        sendForm();



    });

    jQuery('.input-validater').keypress(function (e) {
        if (e.keyCode == 13) {

            if (!validate()) {
                return;
            }

            jQuery("#checking").show();
            sendForm();
        }
    });
});
//--------------------------------------------------function to check button click --------------------------------------------------

function validate() {
    if (
            validateEmpty("txtMessage", "spanMessage") &
            validateEmpty("check_in_date", "spanCheckIn") &
            validateEmpty("check_out_date", "spanCheckOut") &
            validateEmpty("rooms", "spanRooms") &
            validateEmpty("captchacode", "capspan")
            )
    {
        return true;
    } else {
        return false;
    }
}



//--------------------------------------------------Ajax call --------------------------------------------------


function sendForm() {



    jQuery.ajax({
        url: "booking-hotel/send-email.php",
        cache: false,
        dataType: "json",
        type: "POST",
        data: {
            captchacode: jQuery('#captchacode').val(),
            visitor_message: jQuery('#txtMessage').val(),
            visitor_email: jQuery('#txtEmail').val(),
            visitor_check_in: jQuery('#check_in_date').val(),
            visitor_check_out: jQuery('#check_out_date').val(),
            visitor_id: jQuery('#visitor_id').val(),
            visitor_customer_id: jQuery('#customer_id').val(),
            visitor_room_id: jQuery('#room_id').val(),
            visitor_rooms: jQuery('#rooms').val(),
            visitor_acc_id: jQuery('#acc_id').val(),
            visitor_adults: jQuery('#adults').val(),
            visitor_child: jQuery('#child').val(),
            booking_id: jQuery('#booking_id').val(),
            visitor_total_price: jQuery('#total_price').val()


        },
        success: function (html) {
            var status = html.status;
            var msg = html.msg;

            if (status == "incorrect") {

                jQuery("#capspan").addClass("notvalidated");
                jQuery("#capspan").html(msg);
                jQuery("#capspan").show();
                jQuery("#checking").fadeOut(2000);

            } else if (status == "correct") {
                jQuery("#checking").hide();
                jQuery("#dismessage").html(msg).delay(1000).show(1000);

                jQuery('#captchacode').val("");
                jQuery('#txtPickUpDate').val("");
                jQuery('#txtEmail').val("");
                jQuery('#txtPickUpTime').val("");
                jQuery('#txtDropOfTime').val("");
            }


        }
    });
}

//-----------------   function to check empty -------------------------------------------------------

function validateEmpty(field, validatorspan)
{
    if (jQuery('#' + field).val().length != 0)
    {
        jQuery('#' + validatorspan).addClass("validated");
        jQuery('#' + validatorspan).removeClass("notvalidated");
        jQuery('#' + validatorspan).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatorspan).text("");

        return true;
    } else
    {
        jQuery('#' + validatorspan).addClass("notvalidated");
        jQuery('#' + validatorspan).removeClass("validated");
        jQuery('#' + validatorspan).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatorspan).text("This field can not be empty");

        return false;
    }
}

//--------------------------------------------------function to check email--------------------------------------------------

function ValidateEmail(field, validatordiv)
{
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (jQuery('#' + field).val().match(mailformat))
    {
        jQuery('#' + validatordiv).addClass("validated");
        jQuery('#' + validatordiv).removeClass("notvalidated");
        jQuery('#' + validatordiv).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatordiv).text("");
        return true;
    } else
    {
        jQuery('#' + validatordiv).addClass("notvalidated");
        jQuery('#' + validatordiv).removeClass("validated");
        jQuery('#' + validatordiv).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatordiv).text("You have entered an invalid Email Address");

        return false;
    }
}
