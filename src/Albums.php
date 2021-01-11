<?php
date_default_timezone_set('Europe/Bratislava');
include 'includes/comments.inc.php';
include 'includes/dbd.inc.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <base href="."/>
    <meta charset="UTF-8">
    <title>Albums</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="Styles/albums.css" rel="stylesheet" />
    <link href="Styles/layout.css" rel="stylesheet" />

</head>
<body>
<div class="navigationBar">
    <ul>
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a href="src/About.php">About</a>
        </li>
        <li>
            <a href="Albums.php">Albums</a>
        </li>
        <li>
            <a href="Contact.php">Contact</a>
        </li>

    </ul>

</div>
<div class="Albums">

    <ul>
        <li>
            <p>Justice for none</p>
            <img src="./Images/5fdp_justice.jpg" alt="Band wallpaper." width="200" height="200" />

        </li>


    </ul>
</div>


<div class="coment">
    <?php echo "  <form method='POST' action= '".setComment($conn)."' >         
        <input type='hidden' name='UID' value='Anonymous'>
        <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'> 
        <textarea name='message'></textarea><br>
        <button type='submit' name='commentSubmit' >Comment</button><br>
         </form>"
    ?>



</div>
<?php

getComment($conn);

?>


</body>
</html>