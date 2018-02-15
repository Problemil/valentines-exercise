<?php
session_start();

#data.php innehåller array med användare
include "data.php";

#Här lägger jag användarna från arrayen $users(från data.php) i session.
if(!isset($_SESSION["users"])){
$_SESSION["users"] = $users;

}

#Här kollar jag om det finns nått i POST, om det gör det så läggs det i SESSION
if(isset($_POST["username"])){
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];
}

#For loop som sedan kollar informationen användaren skrivit in mot informationen i $users arrayen
for ($i = 0; $i < count($_SESSION["users"]); $i++){
    if($_SESSION["username"] == $_SESSION["users"][$i][0] and $_SESSION["password"] == $_SESSION["users"][$i][1]){
        $_SESSION["fullname"] = $users[$i][2];
        $_SESSION["loggedin"] = true; 
       
    }
}



