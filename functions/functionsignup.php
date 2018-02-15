<?php include "data.php";
if(isset($_POST["signupusername"])){
    $_SESSION["signupusername"] = $_POST["signupusername"];
    $_SESSION["signuppassword"] = $_POST["signuppassword"];
    $_SESSION["signupfullName"] = $_POST["signupfullName"];
}
if(isset($_SESSION["signupusername"])){
    
}
$users[$i] = $_SESSION['signupusername'];
$users[$i][1] = $_SESSION['signuppassword'];
$users[$i][2] = $_SESSION['signupfullName'];


// $users=array("$_SESSION['signupusername']", "$_SESSION['signuppassword']");

