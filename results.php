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



<table border="1px;" class="productTable">
 <th>Username</th> <th>Password</th> <th> Full Name </th><th> Registrated IP </th>
<?php 

    foreach($_SESSION["users"] as $a)
    {
      echo "<tr><td>".$a["username"]."</td><td>".$a["password"]."</td> <td>".$a["fullname"]."</td><td>".$a["regIP"]."</td></tr>";
    }
?>

</table>

<br/><br/>
<a href='deleteusers.php'><button>Delete last users in list</button></a><br/>

</div>

