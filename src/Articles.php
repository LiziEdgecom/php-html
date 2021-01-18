<?php
include_once 'Header.php';


if(!isset($_SESSION['userID'])){
    header("location: Login.php");
}



?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>
<body>



</div>
</div>

<div class="container col-8 border p-4" style="height: 85vh ">
    <div
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