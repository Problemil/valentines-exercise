<?php
session_start();

array_pop($_SESSION["users"]);


header("location:results.php");
die(wooops);