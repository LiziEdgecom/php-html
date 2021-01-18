<?php
include_once 'Header.php';
include 'includes/dbd.inc.php';

if(!isset($_SESSION['userID']) && !($_SESSION['userID'] ==='admin')){
    header("location: Login.php");
}

$_user = $_SESSION['userID'];
$data = mysqli_query($conn,'SELECT * FROM users where userID !='. $_user .' ');
?>

<?php



?>
    <div class="user-page">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Profile</th>
                <th scope="col">Fields</th>
                <th scope="col">Data</th>
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
                <td><a href="#"  data-role="delete" data-id="<?php echo $row['userID'] ;?>" >Delete</a></td>
                <td><button type="button" id="button_delete" data-role="delete" data-id="<?php echo $row['userID'] ;?>" >Delete</button></td>
            </tr>

        <?php
            }
            }?>


            </tbody>
        </table>
</div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<script>


    $(document).ready(function () {
       $('#button').on('click',function (e) {
           e.preventDefault();
           alert("ajax start");
           var id =  $(this).data('id');

            $.ajax({
                url: 'includes/delete.inc.php',
                method : 'post',
                data : {id},
                success(function(){
                    location.reload();
                    }

                )

            })

       })
    })



</script>








<?php

include_once 'Footer.php';
