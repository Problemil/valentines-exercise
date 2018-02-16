<?php
session_start();

unset($_SESSION["loggedin"]);
// unset($_SESSION["users"]);


header("location:login.php");
die(wooops);