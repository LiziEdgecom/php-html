<?php
require_once 'dbd.inc.php';
?>
<?php

if(isset($_POST['method'])===true && empty($_POST['method'])===false){
    $method = trim($_POST['method']);
    $id =  trim($_POST['id']);
    if($method === 'delete') {
        $sql1 = $conn->query('DELETE FROM articles WHERE UID = "' . $id . '"');
        if ($sql1) {
            $sql2 = $conn->query('DELETE  FROM users WHERE userID = "' . $id . '"  ');
            if ($sql2) {
                return 'data deleted';
            }
        }

    }


}else{
?><script>alert("nope");</script><?php
}

