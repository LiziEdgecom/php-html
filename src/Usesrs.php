<?php
include_once 'Header.php';
include 'includes/dbd.inc.php';
include 'includes/functions.inc.php';
if(!isset($_SESSION['userID']) && !($_SESSION['userID'] ==='admin')){
    header("location: Login.php");
}

$_user = $_SESSION['userID'];
$data = mysqli_query($conn,'SELECT * FROM users where userID !='. $_user .' ');
$dataBan =mysqli_query($conn,'SELECT * FROM bans where "bans".user !='. $_user .' ');
?>

<?php



?>
    <div class="user-page">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">User Name</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </thead>
            <tbody>
            <?php
            if($data){
            while ($row = mysqli_fetch_array($data)){ ?>
            <tr>
                <td><?php  echo $row['userName'];    ?></td>
                <td><?php  echo $row['userEmail'];    ?></td>
                <td><?php  echo $row['UID'];    ?></td>
                <?php
                if(isBanned($conn,$row['userID'])){

                    ?>
                    <td><button class="unbanButton" type="button"  onclick="unbanUser()" data-id="<?php echo $row['userID'] ;?>" >Unban</button></td>
                    <?php
                } else{
                    ?>
                    <td><button class="banButton" type="button"  onclick="banUser()" data-id="<?php echo $row['userID'] ;?>" >Ban</button></td>
                    <?php
                }
                ?>

                <td><button class="deleteButton" type="button"  onclick="deleteUser()" data-id="<?php echo $row['userID'] ;?>" >Delete</button></td>
            </tr>

        <?php
            }
            }?>


            </tbody>
        </table>
</div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<script src="JavaScripts/User.js"></script>








<?php

include_once 'Footer.php';
