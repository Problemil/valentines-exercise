<?php
session_start();


#Här lägger jag användarna från arrayen $users(från data.php) i session.
if(!isset($_POST["users"])){
$_SESSION["users"] = $users;

}
$adminUser = "superadmin";
$adminPassword = "pass";


#Här kollar jag om det finns nått i POST, om det gör det så läggs det i SESSION

#For loop som sedan kollar informationen användaren skrivit in mot informationen i $users arrayen
if(isset($_POST["adminusername"])){
    if($_POST["adminusername"] == $adminUser and $_POST["password"] == $adminPassword) {
            $_SESSION["adminloggedin"] = true; 
           
    }
}
?>

DU LYCKADES!! :D