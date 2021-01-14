<?php
include_once 'Header.php'
?>

<div class = "login-form">
    <h2>Log in</h2>

    <form action="login.inc.php" method="post">
        <div class="col-25">
            <label for="name" >Username or email</label>
        </div>
        <div class="col-75">
            <input type="text" name="email" placeholder="Usename/Email..">
        </div>


        <div class="col-25">
            <label for="pwd" >Password</label>
        </div>
        <div class="col-75">
            <input type="password" name="pwd" placeholder="Password..">
        </div>


    </form>

</div>
<div class="row">
    <input type="submit" name="submit" value="Log In">
</div>





<?php
include_once 'Footer.php'
?>
