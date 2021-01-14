<?php
include 'dbd.inc.php';
include 'functions.inc.php';

if(isset($_POST["submit"])){
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    if(emptyInputSignup($username,$pwd)){
        header("location: ../SignUp.php?error=emptyinput");
        exit();

    }
    loginUser($conn,$username,$pwd);

}