<?php
$users = array(
    array("daniel", 1234, "Daniel Stenå"),
    array("joakim", 1234, "Joakim Edward")
);


$_SESSION["users"] = $users;


if(isset($_POST["username"])){
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];
}


for ($i = 0; $i < count($users); $i++){
    if($_SESSION["username"] == $users[$i][0] and $_SESSION["password"] == $users[$i][1]){
        $_SESSION["loggedin"] = true; 
    }
}
if(!isset($_SESSION["loggedin"])){
    header("location:login.php");
    die();
};

