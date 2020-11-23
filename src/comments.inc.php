

<?php


function setComment($conn) {
    if(isset($_POST['commentSubmit']) ){
        $uid = $_POST['UID'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comments (UID,Date,context) VALUES ('$uid','$date','$message')";

        $result = $conn->query($sql);
    }

}
function getComment($conn) {
    $sql = "SELECT * FROM comments";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while ($row = $result->fetch_assoc()){
        echo "<div class='comment-box '>";
        echo $row['UID']."<br>";
        echo $row['Date']."<br>";
        echo nl2br($row['context']);
        echo "</div>";
    }

}

