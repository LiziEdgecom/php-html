<?php

$conn = mysqli_connect('localhost','root', '','ffdpserver');
if(!$conn){
    die("connect failed: ".mysqli_connect_error());
}
