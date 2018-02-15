<?php 
include "data.php";
include "variabels.php";
session_start();
$felkoder = array();

if(!empty($_POST["signupusername"]) ){
    if($_SESSION["signupurllastname"] == "/signup.php"){
        if(!empty($_POST["signupusername"] and !empty($_POST["signuppassword"]) )){
            echo "Ny användare registrerarad! Välkommen! 😄";
            $tillfälligarray = array($_POST["signupusername"], $_POST["signuppassword"], $_POST["signupfullName"]);
            array_push($_SESSION["users"],$tillfälligarray);
        }
        else{
            echo "Du glömde fylla i username och/eller lösenord!";   
        }
    }    
}
