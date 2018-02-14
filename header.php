<?php 
session_start();
include "variabels.php";
include "functions/functionlogin.php";
if(!isset($_SESSION["loggedin"])){
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
    <div class="navProducts"><a href="produkt.php">Produkter</a></div>
    <div class="login"><a href="clearsession.php"><button>utlogg</button></a></div>

</div>