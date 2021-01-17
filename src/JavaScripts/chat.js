

var chat = {}


chat.fetchMessage = function () {

    $.ajax({
        url: 'includes/Achat.php',
        type: 'POST',
        data: {method :'fetch'},
        success: function (data) {
            $(".messages").html(data);
        }
    })
}
chat.fetchMessage();
chat.throwMessage = function(message){
    if($.trim(message).length != 0){
        window.alert("giving Message");
        $.ajax({
            url: 'includes/Achat.php',
            type: 'POST',
            data: {method :'throw', message: message},
            success: function (data) {
                chat.fetchMessage();
                chat.entry.val('');
            }
        })
 }
}

chat.entry = $('.chat .entry');
chat.entry.bind('keydown',function (e) {
   if(e.keyCode === 13 && e.shiftKey===false){

       chat.throwMessage($(this).val());
       e.preventDefault();
   }
})

chat.interval = setInterval(chat.fetchMessage, 5000);