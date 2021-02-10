<?php
session_start();

require "Chat.php";

?>


<?php
if(!isset($_POST)){

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

                ?><!--  view all messages -->

                <div class="message" style="background-color: aliceblue; border-radius: 3px;" >
                <a href ='#' style="padding-left: 10px;"><?php echo $message['UID']?> says:</a>
                <p style="padding-left: 10px;"><?php echo nl2br($message['data']) ?></p>

                <?php

                if($message['UID']===$_SESSION['UID']){

                     ?>
                    <button class="updateArticle" type="button"  onclick="redirect(<?php echo $message['id'] ;?>)" data-id="<?php echo $message['id'] ;?>" >Update</button>

                    <button class="deleteArticle" type="button"  onclick="deleteChat(<?php echo $message['id'] ;?>)" data-id="<?php echo $message['id'] ;?>" >Delete</button>
                    <?php
                }
                else if($_SESSION['UID']==="admin"){
                    ?>
                    <button class="deleteArticle" type="button"  onclick="deleteChat(<?php echo $message['id'] ;?>)" data-id="<?php echo $message['id'] ;?>" >Delete</button>

                    <?php
                }
                ?>
                </div>
                <div style="padding-top: 3px"></div>
                <?php
            }



        }
    }
    else if($method ==='throw' && isset($_POST['message'])===true){
        //POST MESSAGE
        $mess = trim($_POST['message']);
        ?><?php
        if(empty($mess)===false){
            $chat->throwMessages($_SESSION['userID'],$mess) ;
        }

    }
    else if($method ==='delete' && isset($_POST['id'])===true){
        $messID = trim($_POST['id']);
        if(empty($messID)===false){
            $chat->deleteMessage($messID) ;
        }
    }

}

?>