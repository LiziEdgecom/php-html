<?php
require_once 'dbd.inc.php';
?>
<script>alert("before post")</script>
<?php

if(isset($_POST['id'])){
    $sql1 = $conn->query('DELETE * FROM articles WHERE UID = "' . $_POST['id'] .'" ');
    if($sql1){
        $sql2 = $conn->query('DELETE * FROM users WHERE userID = "' . $_POST['id'] .'"  ');
        if($sql2){
            return 'data deleted';
        }
    }




}

