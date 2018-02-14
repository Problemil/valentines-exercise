<?php

$users = array(
    array("daniel", 1234, "Daniel Stenå"),
    array("joakim", 1234, "Joakim Edward"),
    array("Emil", 1234, "Emil Wärdig Tsoukalas"),
    array("Jesper ", 1234, "Jesper Krasse "),

);
$_SESSION["users"] = $users;

if(isset($_SESSION["loggedin"])){
    header("location:login.php");
    die();
};
 
if(isset($_POST["username"])){
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];
}

for ($i = 0; $i < count($users); $i++){
    if($_SESSION["username"] == $users[$i][0] and $_SESSION["password"] == $users[$i][1]){
        $_SESSION["fullname"] = $users[$i][2];
        echo "<script>alert('Hello ". $_SESSION["fullname"] ."!');</script>";
        $_SESSION["loggedin"] = true; 
       
    }
}


