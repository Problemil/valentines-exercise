<?php 
session_start();
require "data.php";
require "variabels.php";

#om $_POST["signupusername"] INTE är tom:
if(!empty($_POST["signupusername"]) ){
    #Om användaren kommer från /signup.php:
    if($_SESSION["signupurllastname"] == URLPREFIX."signup.php" ){
        #($_POST["signupusername"] och $_POST["signuppassword"] inte är tom:
        if(!empty($_POST["signupusername"] and !empty($_POST["signuppassword"]) )){
            $grattisNyKund = "Välkommen ".$_POST["signupusername"]."!😄 <br/>Du är nu registrerad som ny kund hos oss!";

            $tillfälligarray = array($_POST["signupusername"], $_POST["signuppassword"], $_POST["signupfullName"]);
            array_push($_SESSION["users"],$tillfälligarray);
        }
        else{
            echo "Du glömde fylla i username och/eller lösenord!";   
        }
    }    
}

