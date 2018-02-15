<?php include "data.php";
if(isset($_POST["signupusername"])){
    $_SESSION["signupusername"] = $_POST["signupusername"];
    $_SESSION["signuppassword"] = $_POST["signuppassword"];
    $_SESSION["signupfullName"] = $_POST["signupfullName"];
}
if(isset($_POST["signupusername"])){
    $tillfälligarray = array($_POST["signupusername"], $_POST["signuppassword"], $_POST["signupfullName"]);
    
}


    


// $users=array("$_SESSION['signupusername']", "$_SESSION['signuppassword']");

