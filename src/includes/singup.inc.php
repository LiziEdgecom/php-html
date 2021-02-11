

<?php

include 'dbd.inc.php';
include 'functions.inc.php';
if(isset($_POST["submit"])){

    $name  = $_POST["name"];
    $email = $_POST["email"];
    $username  = $_POST["UID"];
    $pwd  = $_POST["pwd"];
    $pwdRepeat  = $_POST["pwdrepeat"];



    if(emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat) !== false){
        header("location: ../SignUp.php?error=emptyinput&name=".$name."&email=".$email."&username=".$username."");
        exit();
    }
    if(invalidUid($username) !== false){
        header("location: ../SignUp.php?error=invalidUid&name=".$name."&email=".$email."&username=".$username."");
        exit();
    }
    if(invalidEmail($email) !== false){
        header("location: ../SignUp.php?error=invalidEmail&name=".$name."&email=".$email."&username=".$username."");
        exit();
    }
    if(pwdmatch($pwd,$pwdRepeat) !== false){
        header("location: ../SignUp.php?error=pwdNoMatch&name=".$name."&email=".$email."&username=".$username."");
        exit();
    }
    if(uidExist($conn,$username,$email) !== false){
        header("location: ../SignUp.php?error=usernameTaken&name=".$name."&email=".$email."&username=".$username."");
        exit();
    }
    createUser($conn,$name,$email,$username,$pwd);


}
else{
    header("location: ../SignUp.php?error=none");
    exit();

}

