<?php 
session_start();
require "data.php";
require "variabels.php";
require "functions/functions.php";
login($users, $_POST["username"], $_POST["password"] );

#funktion som kollar om man är inloggad, annars skickas man till inloggningssidan.
if($_SESSION["loggedin"] == false){
    header("location:login.php");
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <title>
        <?php 
        echo SITENAME;
        if(isset($pagetitle)){
            echo " - ".$pagetitle;

        }
        ?>
    </title>
</head>


<body>

<div class="header">

    <div class="logo"><a href="index.php" id="logga">Love Boxes</a></div>
    <img src="pics/blomma.jpg" class="headPic">
    <img src="pics/blomma.jpg" class="headPic">
    <div class="dropdown">
    <button class="dropbtn">Menu</button>
    <div class="dropdown-content">
    <a href="index.php">Start</a>
    <a href="omoss.php">Om oss</a>    
      <a href="produkter.php">Produkter</a>
      <a href="recept.php">Recept</a>
      <a href="kontakt.php">Kontakta oss</a>
      <a href ="admin.php"> Admin </a>
    </div>
  </div>
  
  
    <div><a href="clearsession.php"><button>Logga ut</button></a></div>

</div>