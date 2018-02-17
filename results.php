<?php
session_start();
require "data.php";

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
<head>
<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<div style='text-align:center'><h1>Här är en lista på alla användare</h1><br/>
<a href='index.php'><button>Tillbaka</button></a><br/>



<?php 
    for ($i = 0; $i < count($_SESSION["users"]); $i++){
        echo "<div style='width:100%; text-align:center;'><h2>".$i."</h2><table style='width:100% border:1px solid black;'>
        <tr>
        <th>".$_SESSION["users"][$i][0]."</th>
        <th>".$_SESSION["users"][$i][1]."</th> 
        <th>".$_SESSION["users"][$i][2]."</th>
        </tr>
        </table>"
        ;
    }
?>

<br/><br/>
<a href='deleteusers.php'><button>Delete last users in list</button></a><br/>

</div>

