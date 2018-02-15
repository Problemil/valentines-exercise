<?php 
session_start();

include "functions/functionlogin.php";
include "variabels.php";
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
    <title>
        <?php 
        echo siteName;
        if(isset($pagetitle)){
            echo " - ".$pagetitle;

        }
        ?>
    </title>
</head>


<body>

<div class="header">

    <div class="logo">Love boxes</div>
    <img src="pics/blomma.jpg" class="headPic">
    <img src="pics/blomma.jpg" class="headPic">
    <div class="dropdown">
    <button class="dropbtn">Menu</button>
    <div class="dropdown-content">
      <a href="produkt.php">Produkter</a>
      <a href="#">Kontakta oss</a>
      <a href="omoss.php">Om oss</a>
    </div>
  </div>
  
  
    <div class="login"><a href="clearsession.php"><button>utlogg</button></a></div>

</div>