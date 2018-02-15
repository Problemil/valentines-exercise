<?php
session_start();

unset($_SESSION["loggedin"]);
// unset($_SESSION["users"]);

// session_destroy();
header("location:login.php");
die(wooops);