<?php
session_start();
include 'dbd.inc.php';
include 'functions.inc.php';

echo $_SESSION['userEmail'];



    if(!$_GET["email"]==$_SESSION['userEmail']){
        if(invalidEmail($_GET["email"]) !== false) {
    header("location: ../Profile.php?error=invalidEmail");
            exit();
        }
        else{
            $userE=$_GET["email"];
        }


    }
    else{
        $userN=$_GET["email"];
    }
        $userN= $_GET["name"];

    if(!$_GET["UID"]==$_SESSION['UID']){
        if(invalidUid($_GET["UID"]) !== false){
         header("location: ../SignUp.php?error=invalidUid");
            exit();
        }
        else{
            $UID = $_GET["UID"];
        }
    } else{
        $UID = $_GET["UID"];
        }

    echo  $_user=$_SESSION['userID'];
echo $UID ;
echo   $userN;
echo  $userE;

if($conn->query('UPDATE users SET userName='. $userN .',userEmail= '. $userE .', UID = '.$UID.'  WHERE userID='. $_user .' ') ===TRUE){
        //header("location: ../Profile.php?error=none");
        exit();
    }
    else{
      //  header("location: ../Profile.php?error=Wrong");
        echo "wrong";
        exit();

    }




