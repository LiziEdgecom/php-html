<?php
include_once 'Header.php'
?>


    <div class = "signup-form">
     <h2>Sign Up</h2>

         <form action="includes/singup.inc.php" method="post">
            <div class="col-25">
                <label for="name" >Full name</label>
            </div>
            <div class="col-75">
                <input type="text" name="name" placeholder="Your name..">
            </div>

            <div class="col-25">
                <label for="email" >Email adress</label>
            </div>
            <div class="col-75">
                <input type="text" name="email" placeholder="Email..">
            </div>

            <div class="col-25">
                <label for="UID" >Username</label>
            </div>
            <div class="col-75">
                <input type="text" name="UID" placeholder="Nick..">
            </div>

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




    </div>
<div class="row">

    <input type="submit" name="submit" value="Submit">
</div>
</form>








<?php

include_once 'Footer.php'
?>
