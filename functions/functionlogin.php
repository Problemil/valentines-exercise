<?php
session_start();

#data.php innehåller array med användare
include "data.php";

#Här lägger jag användarna från arrayen $users(från data.php) i session.
if(!isset($_SESSION["users"])){
$_SESSION["users"] = $users;

}
#For loop som sedan kollar informationen användaren skrivit in mot informationen i $users arrayen
if(isset($_POST["username"])){
    for ($i = 0; $i < count($_SESSION["users"]); $i++){
        if($_POST["username"] == $_SESSION["users"][$i][0] and $_POST["password"] == $_SESSION["users"][$i][1]){
            $_SESSION["fullname"] = $_SESSION[$i][2];
            echo "<script>alert('Hello ". $_SESSION["fullname"] ."! Your IP adress is: ".$_SERVER['REMOTE_ADDR']." ');</script>";
            
            $_SESSION["loggedin"] = true; 
           
        }
    }
}




