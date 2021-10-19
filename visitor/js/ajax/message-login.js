$(document).ready(function () {

    var form = $('#form').formValid({
        fields: {
            "email": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter the email..!"
                    },
                    {
                        "type": "email",
                        "message": "Please enter the valid email..!"
                    }
                ]
            },
            "password": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter your password..!"
                    }
                ]
            }
        }
    });

    form.keypress(300);

    $('button[type="submit"]').click(function () {
        var id = $('#id').val();
        form.test();
        if (form.errors() == 0) {
            var formData = new FormData($("form#form")[0]);
            $.ajax({
                url: "post-and-get/ajax/login.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function (result) {
                    ;
                    if (result.status == 'success') {
                        $.ajax({
                            url: "post-and-get/ajax/chat.php",
                            type: "POST",
                            data: {
                                customer: id,
                                visitor: result.id,
                                action: 'LOGIN_SEND_MESSAGE'
                            },
                            dataType: "JSON",
                            success: function (result) {
                                if (result.status == 'success') {
                                    window.location.replace("create-messenger.php?id=" + id);
                                }
                            }
                        });
                    } else {
                        $('#message').text(result.message);
                    }
                }
            });
        }
        return false;
    });


});