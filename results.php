<?php
session_start();
include "data.php";

if(!isset($_SESSION["adminloggedin"])){
    header("location:admin.php");
}

if(isset($_POST["adminusername"])){
    for ($i = 0; $i < count($users); $i++){
        if($_POST["adminusername"] == $users[$i][0] and $_POST["adminpassword"] == $users[$i][1]){
  
            // echo "<script>alert('Hello ". $_SESSION["fullname"] ."! Your IP adress is: ".$_SERVER['REMOTE_ADDR']." ');</script>";
            
            $_SESSION["adminloggedin"] = true; 
           
        }
    }
    
}
?>

<?php 
print_r($_SESSION["users"]);

echo "<a href='index.php'><button>Tillbaka</button></a>";