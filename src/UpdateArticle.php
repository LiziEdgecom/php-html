<?php
include_once 'Header.php';

?>

<div class = "login-form">
    <h2>Log in</h2>

    <form action="includes/login.inc.php" method="post">
        <div class="col-25">
            <label for="User" >Username or email</label>
        </div>
        <div class="col-75">
            <input type="text" name="UID" placeholder="Usename/Email..">
        </div>


        <div class="col-25">
            <label for="pwd" >Password</label>
        </div>
        <div class="col-75">
            <input type="password" name="pwd" placeholder="Password..">
        </div>
        <?php
        if(isset($_GET["error"])){

            if($_GET["error"]=="emptyinput")  {
                echo " <div class='error-message'><p >Fill in all fields!</p> </div>";
            }
            else if ($_GET["error"]=="wrongLogin"){
                echo"<div class='error-message'><p >Incorrect login !</p></div>";
            }

        }

        ?>
</div>
<div class="row">
    <input type="submit" name="submit" value="Log In">
</div>
</form>







<?php
include_once 'Footer.php'
?>
