$(document).ready(function () {


    $("#verify").click(function (event) {
        event.preventDefault();
        if (!$('#code').val() || $('#code').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter verification code..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else {
            var id = $("#id").val();
            var code = $("#code").val();
            $.ajax({
                url: "post-and-get/ajax/email-verify.php",
                type: "POST",
                data: {id: id, code: code, action: "EMAILVERYFY"},
                dataType: "JSON",
                success: function (result) {
                    if (result.status == 'success') {
                        window.swal({
                            title: "Please wait...!",
                            text: "it may take few seconds...!",
                            imageUrl: "assets/images/tenor.gif",
                            showConfirmButton: false,
                            allowOutsideClick: false
                        });
                        setTimeout(function () {
                            window.location.replace("index.php");
                        }, 1500);
                    } else {
                        swal({
                            title: "Error!",
                            text: "Please enter correct verification code..!",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    }
                }
            });
        }

    });
});