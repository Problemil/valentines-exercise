<?php
session_start();
include "data.php";

if(!isset($_SESSION["adminloggedin"])){
    header("location:admin.php");
}

if(isset($_POST["adminusername"])){
    for ($i = 0; $i < count($users); $i++){
        if($_POST["adminusername"] == $users[$i][0] and $_POST["adminpassword"] == $users[$i][1]){
            $_SESSION["adminloggedin"] = true; 
           
        }
    }
    
}
?>

<?php 

echo "<h1>Här är en lista på alla användare</h1><br/><a href='index.php'><button>Tillbaka</button></a><br/><br/>";

print_r($_SESSION["users"]);