<?php

function emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat){
    $result=null;
    if(empty($name)||empty($email)||empty($username)||empty($pwd)||empty($pwdRepeat)){
        $result =true;
    }
    else{
        $result=false;
        }
    return $result;
}

function invalidUid($username){
    $result=null;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
        $result =true;
    }
    else{
        $result=false;
    }
    return $result;
}
function invalidEmail($email){
    $result=null;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result =true;
    }
    else{
        $result=false;
    }
    return $result;
}
function pwdmatch($pwd,$pwdRepeat){
    $result=null;
    if($pwd !== $pwdRepeat){
        $result =true;
    }
    else{
        $result=false;
    }
    return $result;
}
function uidExist($conn,$username, $email){
    $sql = "SELECT * FROM users WHERE UID = ? OR userEmail = ? ; " ;
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../SignUp.php?error=stmtFailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss" , $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData)){
      return $row;
    }
    else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);

}
function createUser($conn,$name,$email,$username,$pwd){
    $sql = "INSERT INTO users (userName,userEmail,UID,userPwd) VALUES (?, ?, ?, ?)" ;
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../SignUp.php?error=stmtFailed");
        exit();
    }
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss" , $username, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../SignUp.php?error=none");

}