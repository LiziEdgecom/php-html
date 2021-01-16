<?php
include_once 'Header.php';
include 'includes/modal.php';
include 'includes/dbd.inc.php';

if(!isset($_SESSION['userID'])){
    header("location: Login.php");
}

$_user = $_SESSION['userID'];

$data = mysqli_query($conn,'SELECT * FROM users where userID='. $_user .' ');
if($data){

    $row = mysqli_fetch_array($data,MYSQLI_ASSOC);


}
else{echo"Something went wrong";}
///$row = mysqli_fetch_assoc($data);
?>
<div class="profile-page">
    <table class="table">
    <thead class="thead-dark">
    <tr>
    <th scope="col">Profile</th>
    <th scope="col">Fields</th>
    <th scope="col">Data</th>
    <th scope="col"></th>
    </thead>
    <tbody>
    <tr id="1">
    <th scope="row"></th>
    <td>Name</td>
    <td data-target="userName"><?php
       echo $row['userName'];
        ?></td>
    </tr>
    <tr id="1">
        <th scope="row"></th>
    <td>Email adress</td>
    <td data-target="userEmail"><?php
        echo $row['userEmail'];
        ?></td>

    </tr>
    <tr id="1"><th scope="row"></th>
    <td>Username</td>
    <td data-target="UID"><?php

        echo $row['UID'];
        ?></td>

    </tr>


    </tbody>
    </table>



    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        UPDATE
    </button>

    <div  class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Update your profile</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action='includes/updateProfile.inc.php'>
            <div class="modal-body">
                <div class="col - 75">
                <input type="text" name='name' value='<?php echo $row['userName'] ?>' >
            </div>
            <div class="col - 75">
            <input type="text" name='email' value='<?php echo $row['userEmail'] ?>' >

    </div>
    <div class="col - 75">
    <input type="text" name='UID' value='<?php echo $row['UID'] ?>' >
</div>
    </div>
    <div class="modal-footer">
        <input type="submit" name="submit" value="Save changes" class="btn btn-secondary pull-right">


    </div>
    </form>
    </div>
    </div>
    </div>






       </div>











<?php

include_once 'Footer.php';

