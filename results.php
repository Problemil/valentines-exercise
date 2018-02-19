<?php
    session_start();
    require "functions/functions.php";
    require "data.php";

    // adminLogin($_POST["adminusername"],$_POST["adminpassword"]);
    
    if(isset($_POST["adminusername"])){
        for ($i = 0; $i < count($users); $i++){
            if($_POST["adminusername"] == $_SESSION["users"][$i]["username"] and $_POST["adminpassword"] == $_SESSION["users"][$i]["password"]){
                $_SESSION["adminloggedin"] = true;        
            }
        }
    
    }
    if(!isset($_SESSION["adminloggedin"])){
        header("location:admin.php");
    }
?>
<head>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<div style='text-align:center'>
        <h1>Registrerade användare</h1>
        <br/>
        <a href='index.php'>
            <button style="font-size:15px;">Tillbaka</button>
        </a>
        <br/>
        <br/>
    <table border="1px;" class="productTable">
        <th>Username</th> 
        <th>Password</th> 
        <th> Full Name </th>
        <th> Registrated IP </th>
        <?php 

            foreach($_SESSION["users"] as $a)
            {
            echo "<tr><td>".$a["username"]."</td><td>".$a["password"]."</td> <td>".$a["fullname"]."</td><td>".$a["regIP"]."</td></tr>";
            }
        ?>
    </table>
    <br/>
    <br/>
    <a href='deleteusers.php'>
        <button style="height:30px; font-size:15px;">Ta bort den sista användaren</button>
    </a>
    <br/>
</div>