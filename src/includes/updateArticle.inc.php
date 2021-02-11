<?php
require_once 'dbd.inc.php';

if(isset($_POST["submit"])){

  echo  $data = $_POST["data"];
  echo  $id = $_POST["ID"];

  $sql= "UPDATE articles set data = '$data' where id= ". (int)$id ."  " ;
  mysqli_query($conn,$sql);

  header("location:../Articles.php");
}