<?php
include 'dbd.inc.php';
include 'functions.inc.php';

if(isset($_POST["submit"])){
    $username = $_POST["UID"];
    $pwd = $_POST["pwd"];

    if(emptyInputLogin($username,$pwd)){
        header("location: ../Login.php?error=emptyinput");
        exit();

    }

    loginUser($conn,$username,$pwd);
}
else{ header("location: ../Login.php");}
