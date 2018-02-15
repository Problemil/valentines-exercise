<?php
session_start();

unset($_SESSION["loggedin"]);
if ($_SESSION["loggedin"]) {
    
    print_r($_SESSION["loggedin"]);
}

// session_destroy();
header("location:login.php");
die(wooops);