<?php
include_once 'Header.php';


if(!isset($_SESSION['userID'])){
    header("location: Login.php");
}


?>



<div class="container col-8 border p-4" style="height: 85vh ">

    <div class="d-flex mb-5 row border p-4">
        <form id="addForm" enctype="multipart/form-data" class="col-12" method="post">
            <div class="chat">
                <textarea class="entry" placeholder="Do you want to say something? ..Press Enter to Upload." id="text"
                          name="text"></textarea>
            </div>



        </form>


    </div>

    <div class="messages" >

        <div class="message"></div>

    </div>
</div>

<script src="JavaScripts/chat.js"></script>
</body>


</html>