$(document).ready(function () {


    var customer = $('#customer').val();
    var visitor = $('#visitor').val();

    if (customer) {
        update_chat_history_data(customer, visitor);

    } else {

//        html3 += '<div class="chat-start">';
//        html3 += '<span class="bx bx-message chat-sidebar-toggle chat-start-icon font-large-3 p-3 mb-1"></span>';
//        html3 += '<h4 class="d-none d-lg-block py-50 text-bold-500">Select a contact to start a chat!</h4>';
//        html3 += '<button class="btn btn-light-primary chat-start-text chat-sidebar-toggle d-block d-lg-none py-50 px-1">Start Conversation!</button>';
//        html3 += '</div>';
//       
//        $('#chat-list').empty();
        $('#chat-start').show();
        $('.chat-header').addClass('hidden');
        $('.chat-footer').addClass('hidden');
    }



    setInterval(function () {
        var customer = $('#customer').val();
        var visitor = $('#visitor').val();
        update_chat_history_data(customer, visitor);
    }, 1000);


    $('.chat-participant').click(function () {
        var customer = $(this).attr('customer');
        var visitor = $(this).attr('visitor');
        ;
        var currentLocation = window.location;
        var url = currentLocation.toString().split("?");
        $('#customer').val(customer);
        $('#visitor').val(visitor);

        history.pushState({}, null, url[0]);
        update_chat_history_data(customer, visitor);
    });


    function update_chat_history_data(customer, visitor) {

        $.ajax({
            url: "post-and-get/ajax/chat.php",
            cache: false,
            dataType: "json",
            type: "POST",
            data: {
                customer: customer,
                visitor: visitor,
                action: 'GETMESSAGES'
            },
            success: function (result) {

                if (result) {
                    var html = "";
                    var html2 = "";
                    var html3 = ''; 
                    var img = "";


 
                    if (result.image_name_visitor) {
                        img = '<img src="../upload/customer/profile/' + result.image_name_visitor + '" alt="avatar" height="36" width="36" >';
                    } else {
                        img = '<img src="../images/member.jpg" alt="avatar" height="36" width="36">';
                    }

                    $.each(result.messages, function (key, message) {
                        key++;
                        if (message.customer == customer && message.type == 'V') {


                            html += '<div class="chat">';
                            html += '<div class="chat-avatar">';

                            html += '</div>';
                            html += '<div class = "chat-body">';
                            html += '<div class = "chat-message">';
                            html += '<p>' + message.message + '</p>';
                            html += '<span class = "chat-time" >' + message.send_at + '</span>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';

                        } else {

                            html += '<div class="chat chat-left">';
                            html += '<div class="chat-avatar">';

                            html += '</div>';
                            html += '<div class = "chat-body">';
                            html += '<div class = "chat-message">';
                            html += '<p>' + message.message + '</p>';
                            html += '<span class = "chat-time" > ' + message.send_at + '</span>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                        }

                    });
                    html2 += img;
                    if (result.status == 'active') {
                        html2 += '<span class="avatar-status-online"></span>';
                    } else {
                        html2 += '<span class="avatar-status-away"></span>';
                    }
//alert(html2);

                    if (result.is_type == 1) {
                        html3 += '<small style="float: left;margin-bottom: 5px; " class="type"> <em>Typing here now....</em></small>';

                    }


                    $('#type' + result.id).empty();
                    $('#type' + result.id).append(html3);
                    $('#chat-list').empty();
                    $('#chat-list').append(html);
                    $('.chat-header').removeClass('hidden');
                    $('.chat-footer').removeClass('hidden');
                    $('.chat-profile-toggle').empty();
                    $('.chat-profile-toggle').append(html2);
                    $('.chat-visitor-name').empty();
                    $('.chat-visitor-name').append(result.visitor_name);
                    chatContainer.scrollTop($(".chat-container > .chat-content").height());

                }
            }
        });
    }

});



function chatMessagesSend() {
    var message = chatMessageSend.val();
    var customer = $('#customer').val();
    var visitor = $('#visitor').val();

    $.ajax({
        url: "post-and-get/ajax/chat.php",
        method: "POST",
        data: {
            action: 'CREATE',
            customer: customer,
            visitor: visitor,
            message: message
        },
        success: function (result) {

            if (result.status == 'success') {

                var html = "";
                html += '<div class = "chat-message">';
                html += '<p>' + result.message + '</p>';
                html += '<span class = "chat-time" >' + result.send_at + '</span>';
                html += '</div>';
                $("#chat-body").append(html);
                chatMessageSend.val("");
                chatContainer.scrollTop($(".chat-container > .chat-content").height());
            } else {
                swal({
                    title: "Error!",
                    text: "There was an error. Please try again later.",
                    type: 'error',
                    timer: 2000,
                    showConfirmButton: false
                });
            }

        }
    });
}
$(".chat-sidebar-list li").on("click", function () {
    chatContainer.animate({scrollTop: chatContainer[0].scrollHeight}, 400);
})

$(document).on('focus', '.chat_message', function () {

    var is_type = 1;
    $.ajax({
        url: "post-and-get/ajax/chat.php",
        method: "POST",
        data: {
            action: "UPDATE_TYPING",
            is_type: is_type
        },
        success: function ()
        {

        }
    })
});

$(document).on('blur', '.chat_message', function () {

    var is_type = 0;
    $.ajax({
        url: "post-and-get/ajax/chat.php",
        method: "POST",
        data: {
            action: "UPDATE_TYPING",
            is_type: is_type
        },
        success: function ()
        {

        }
    })
});

var chatSidebarListWrapper =
        chatArea = $(".chat-area");

$(".chat-sidebar-list-wrapper ul li").on("click", function () {
    $(".chat-sidebar-list-wrapper ul li").hasClass("active") && $(".chat-sidebar-list-wrapper ul li").removeClass("active"),
            $(this).addClass("active"),
            $(".chat-sidebar-list-wrapper ul li").hasClass("active") ? (chatStart.addClass("d-none"),
            chatArea.removeClass("d-none")) : (chatStart.removeClass("d-none"),
            chatArea.addClass("d-none"));
});
