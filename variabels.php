<?php
$url_prefix="";

$url_array = explode("/", $_SERVER['PHP_SELF']);

for ($i = 0; $i < count($url_array)-1; $i++){
    $url_prefix.= $url_array[$i]."/";
}
$_SESSION["urlprefix"] = $url_prefix;  


define("SITENAME", "Love boxes");
define("URLPREFIX", $_SESSION["urlprefix"]);
define("LOGGED_IN_USER",$_SESSION["fullname"]);

$missingInfoInSignup = "<h2 style='color:red'>Alla fält måste fyllas i</h2>";