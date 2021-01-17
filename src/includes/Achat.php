<?php
session_start();

require "Chat.php";

?>


<?php
if(!isset($_POST)){
    echo"sss";
}

if(isset($_POST['method'])===true && empty($_POST['method'])===false){
    $chat = new Chat();
    $method = trim($_POST['method']);

     ?><?php
    if($method === 'fetch'){

        $messages=$chat->fetchMessages();
        if(empty($messages)===true){
            echo 'There are actualy no messages';
        }
        else{
            foreach ($messages as $message){
                ?>
                <div class="message" style="background-color: aliceblue; border-radius: 3px;" >
                <a href ='#' style="padding-left: 10px;"><?php echo $message['UID']?> says:</a>
                <p style="padding-left: 10px;"><?php echo nl2br($message['data']) ?></p></div>
                <div style="padding-top: 3px"></div>
                <?php
            }



        }
    }
    else if($method ==='throw' && isset($_POST['message'])===true){
        echo "i was here";
        $mess = trim($_POST['message']);
        ?><script>alert( "we are here" )</script><?php
        if(empty($mess)===false){
            $chat->throwMessages($_SESSION['userID'],$mess) ;
        }

    }

}

?>