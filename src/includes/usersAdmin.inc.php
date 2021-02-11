<?php
require_once 'dbd.inc.php';


if(isset($_POST['method'])===true && empty($_POST['method'])===false) {
    $method = trim($_POST['method']);

    if ($method === 'delete') {
        $id = trim($_POST['id']);
        $sql1 = $conn->query('DELETE FROM articles WHERE UID = "' . $id . '"');
        if ($sql1) {
            $sql3 = $conn->query('DELETE  FROM bans WHERE bans.user = "' . $id . '"  ');
            $sql2 = $conn->query('DELETE  FROM users WHERE userID = "' . $id . '"  ');
            if ($sql2) {
                return 'data deleted';
            }
        }

    }
    else if($method === 'ban'){
        $id = (int)trim($_POST['id']);
        $reason = trim($_POST['reason']);

        $conn->query('INSERT INTO bans (reason, user)  VALUES ( "'.$reason.'" , "'. $id .'") ');
    }
    else if ($method === 'unban') {
        $method = trim($_POST['method']);
        $id = trim($_POST['id']);

        $conn->query('DELETE FROM bans where user ="' . $id . '" ');
    }




}
    ?>
    <?php