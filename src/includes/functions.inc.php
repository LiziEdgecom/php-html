<?php
/**
 * @param $name
 * @param $email
 * @param $username
 * @param $pwd
 * @param $pwdRepeat
 * @return bool|null
 */
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

    mysqli_stmt_bind_param($stmt, "ssss" , $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../SignUp.php?error=none");

}

function emptyInputLogin($username,$pwd){
    $result=null;
    if(empty($username)||empty($pwd)){
        $result =true;
    }
    else{
        $result=false;
    }
    return $result;
}

function loginUser($conn,$username,$pwd){
    $uidExist = uidExist($conn,$username, $username);
    $ban = isBannedLogin($conn,(int)$uidExist["userID"]);
    $result = getWhyBanned($conn,(int)$uidExist["userID"]);

    if($uidExist === false){
        header("location: ../Login.php?error=wrongLogin&username=".$username." ");
    }



    $pwdHashed = $uidExist["userPwd"];

    $chceckPwd = password_verify($pwd,$pwdHashed);

    if($chceckPwd === false){
        header("location: ../Login.php?error=wrongLogin&username=".$username."");

    }

    else if($ban===true){


        header("location: ../Login.php?error=bannedLogin&result=".$result."&username=".$username." ");
        exit();
    }
    else if($chceckPwd === true){



        session_start();
        $_SESSION["userID"]= $uidExist["userID"];
        $_SESSION["UID"]= $uidExist["UID"];
        header("location:../index.php");
        exit();



    };

}

function getData($conn,$articleID){
    $sql = 'SELECT data FROM articles where articles.id= "'.$articleID.'" ' ;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    return $row['data'];


}
function getWhyBanned($conn,$username){
    $sql = 'SELECT * FROM bans where bans.user= "'.$username.'" ' ;
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        if((int)$row['user'] === $username){
            return $row['reason'];
        }
}
    return;
}

function isBannedLogin($conn,$user){

    $sql = "SELECT * FROM bans " ;
    $result = mysqli_query($conn,$sql);
    if(! $result ) {
        die('Could not get data: ' . mysqli_error());
    }
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        if((int)$row['user'] === $user){
            return true;

        }



    }
    return false;
}


function isBanned($conn,$userID){

    $sql = "SELECT * FROM bans " ;
    $result = mysqli_query($conn,$sql);
    if(! $result ) {
        die('Could not get data: ' . mysqli_error());
    }
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
       if($row['user'] === $userID){
           return true;
       }


    }
    return false;
}







