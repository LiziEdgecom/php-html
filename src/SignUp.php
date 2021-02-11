<?php
include_once 'Header.php';
if(isset($_SESSION['userID'])){
    header("location: index.php");
}



?>

    <div class = "signup-form">
     <h2>Sign Up</h2>

         <form action="includes/singup.inc.php" method="post">
            <div class="col-25">
                <label for="name" >Full name</label>
            </div>
             <?php
             if(isset($_GET["error"]) && isset($_GET["name"])){
              ?>
                 <div class="col-75">
                     <input type="text" name="name" value= "<?php  echo $_GET["name"]; ?>" >
                 </div>
             <?php
             }
             else{
                ?>
                 <div class="col-75">
                     <input type="text" name="name" placeholder="Your name..">
                 </div>
                 <?php
             }
             ?>
             <div class="col-25">
                 <label for="email" >Email adress</label>
             </div>
             <?php
             if(isset($_GET["error"]) && isset($_GET["email"])){
                 ?>
                 <div class="col-75">
                     <input type="text" name="email" value= "<?php  echo $_GET["email"]; ?>" >
                 </div>
                 <?php
             }
             else{
                 ?>
                 <div class="col-75">
                     <input type="text" name="email" placeholder="Email..">
                 </div>
                 <?php
             }
             ?>

             <div class="col-25">
                 <label for="UID" >Username</label>
             </div>



             <?php
             if(isset($_GET["error"]) && isset($_GET["username"])){
                 ?>
                 <div class="col-75">
                     <input type="text" name="UID" value= "<?php  echo $_GET["username"]; ?>" >
                 </div>
                 <?php
             }
             else{
                 ?>
                 <div class="col-75">
                     <input type="text" name="UID" placeholder="Nick..">
                 </div>
                 <?php
             }
             ?>


            <div class="col-25">
                <label for="pwd" >Password</label>
            </div>
            <div class="col-75">
                <input type="password" name="pwd" placeholder="Password..">
            </div>

            <div class="col-25">
                <label for="pwdrepeat" >Repeat password</label>
            </div>
            <div class="col-75">
                <input type="password" name="pwdrepeat" placeholder="Repeat pasword..">
            </div>
             <?php
             if(isset($_GET["error"])){

                 if($_GET["error"]=="emptyinput")  {
                  echo " <div class='error-message'><p >Fill in all fields!</p> </div>";
                 }
                 else if ($_GET["error"]=="invalidUid"){
                     echo"<div class='error-message'><p >Choose a proper username!</p></div>";
                 }
                 else if ($_GET["error"]=="invalidEmail"){
                     echo"<div class='error-message'><p >Choose a proper email!</p></div>";
                 }
                 else if ($_GET["error"]=="pwdNoMatch"){
                     echo"<div class='error-message'><p >Password doesn't match!</p></div>";
                 }
                 else if ($_GET["error"]=="usernameTaken"){
                     echo"<div class='error-message'><p >Choose a different Username!</p></div>";
                 }
                 else if ($_GET["error"]=="stmtFailed"){
                     echo"<div class='error-message'><p >Something went wrong, try again!</p></div>";
                 }
                 else if ($_GET["error"]=="none"){
                     echo"<div class='signed-up-succes'><p color='red' >You have signed up!</p>";
                 }
             }

             ?>
    </div>
<div class="row">
    <input type="submit" name="submit" value="Sign Up">
</div>
</form>


<?php

include_once 'Footer.php';

