<?php
session_start();

#data.php innehåller array med användare
include "data.php";

#Här lägger jag användarna från arrayen $users(från data.php) i session.
$_SESSION["users"] = $users;

#Här kollar jag om det finns nått i POST, om det gör det så läggs det i SESSION
if(isset($_POST["username"])){
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];
}

#For loop som sedan kollar informationen användaren skrivit in mot informationen i $users arrayen
for ($i = 0; $i < count($users); $i++){
    if($_SESSION["username"] == $users[$i][0] and $_SESSION["password"] == $users[$i][1]){
        $_SESSION["fullname"] = $users[$i][2];
        echo "<script>alert('Hello ". $_SESSION["fullname"] ."!');</script>";
        $_SESSION["loggedin"] = true; 
       
    }
}


