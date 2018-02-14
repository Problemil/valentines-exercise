<?php
    $testUsername = "test";
    $testPassword = "test";

if(isset($_POST["username"])){
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];
}
if($_SESSION["username"] == $testUsername and $_SESSION["password"] == $testPassword ){
    $_SESSION["loggedin"] = true; 
}
if(!isset($_SESSION["loggedin"])){
    header("location:login.php");
    die();
}

