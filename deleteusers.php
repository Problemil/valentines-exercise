<?php
session_start();
#Detta tar borta sista raden i users
array_pop($_SESSION["users"]);

#Skickar användaren till results.php(igen)
header("location:results.php");
die(wooops);