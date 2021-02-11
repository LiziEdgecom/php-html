<?php
include_once 'Header.php';
if(isset($_SESSION['userID'])){
    header("location: index.php");
}
?>

<div class = "login-form">
    <h2>Log in</h2>

    <form action="includes/login.inc.php" method="post">
       <div style="height: 280px;">
        <div class="col-25">
            <label  >Username or email</label>
        </div>
        <div class="col-75">
            <?php
            if(isset($_GET["username"])){
                ?>
                <input type="text" name="UID" value=<?php echo $_GET["username"] ?> >
            <?php

            }else{
                ?> <input type="text" name="UID" placeholder="Usename/Email..">
            <?php }
            ?>

        </div>


        <div class="col-25">
            <label  >Password</label>
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
            else if ($_GET["error"]=="bannedLogin"){
                echo "<div class='error-message'><p >User Banned ! Reason :  </p></div>" ;
                ?><div class='error-message'><p ><?php echo $_GET["result"] ?></p></div><?php
            }

        }

        ?>
</div>
<div class="row"  >
    <input type="submit" name="submit" value="Log In">
</div>
    </form>

</div>





<?php
include_once 'Footer.php'
?>
