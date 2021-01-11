<?php
include_once 'Header.php'
?>

<section class="signup-form">
    <h2>Sign Up</h2>
    <form action="singup.inc.php" method="post">
        <input type="text" name="name" placeholder="Full name..">
        <input type="text" name="email" placeholder="Email..">
        <input type="text" name="UID" placeholder="Username..">
        <input type="password" name="pwd" placeholder="Password..">
        <input type="password" name="pwdrepeat" placeholder="Repeat pasword..">
        <button type = "submit" name="submit">Sign up</button>
    </form>


</section>









<?php
include_once 'Footer.php'
?>
