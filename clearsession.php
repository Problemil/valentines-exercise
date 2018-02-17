<?php
session_start();

unset($_SESSION["loggedin"]);
// unset($_SESSION["users"]);
unset($_SESSION["adminloggedin"]);

header("location:login.php");
die(wooops);