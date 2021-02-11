<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="."/>
    <meta charset="UTF-8">
    <title>My unofficial website</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                                                crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="Styles/reset.css" rel="stylesheet"/>
    <link href="Styles/galery.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
  <link href="Styles/layout.css" rel="stylesheet"/>
</head>

<body >
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a href="#" class="navbar-brand">Five Finger Death Punch</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="index.php" class="nav-link">Home</a>
            </li>


            <?php
            if(isset($_SESSION["UID"])){
                if($_SESSION["UID"]==='admin'){
                echo "    
    
            <li class=\"nav-item\">
                <a href=\"Galery.php\" class=\"nav-link\">Galery</a>
            </li>
            
            <li class=\"nav-item\">
                <a href=\"Articles.php\" class=\"nav-link\">Discusion</a>
            </li>
                    <li class=\"nav-item\">
                    <a href=\"Usesrs.php\" class=\"nav-link\">Users</a>
                    </li> 
                    
                ";
                echo "
                    <li class=\"nav-item\">
                    <a href=\"includes/logout.inc.php\" class=\"nav-link\">Log out</a>
                    </li>
                ";
                }else{

                    echo "       <li class=\"nav-item\">
                <a href=\"Galery.php\" class=\"nav-link\">Galery</a>
            </li>
            
            <li class=\"nav-item\">
                <a href=\"Articles.php\" class=\"nav-link\">Discusion</a>
            </li>
                    <li class=\"nav-item\">
                    <a href=\"Profile.php\" class=\"nav-link\">Profile page</a>
                    </li> 
                    
                ";
                echo "
                    <li class=\"nav-item\">
                    <a href=\"includes/logout.inc.php\" class=\"nav-link\">Log out</a>
                    </li>
                ";
                }
            }else {
                echo"
                <li class=\"nav-item\">
                <a href=\"SignUp.php\" class=\"nav-link\">Sign Up</a>
                </li>";
                echo"
                <li class=\"nav-item\">
                <a href=\"Login.php\" class=\"nav-link\">Log In</a>
                 </li>
                ";

            }
            ?>


        </ul>
    </div>

</nav>
