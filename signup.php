<?php 
include "variabels.php";
$pagetitle = "Sign up"; ?>

<head>
<title>
    <?php 
        echo siteName;
        if(isset($pagetitle)){
            echo " - ".$pagetitle;

        }
    ?>
</title>
<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<?php
?>    
<body id="loginBody">
    <div id="loginDiv">
        <h2>
            Fill out this information to become a member 😎
        </h2>
        <form action='index.php' METHOD='POST'>      
            <div class='nameandinput'>
                <div class='name'>
                    Username: 
                </div> 
                <div class='input'>
                    <input type='text' name='username'>
                </div>
            </div>
            <div class='nameandinput'>
                <div class='name'>
                    Password: 
                </div> 
                <div class='input'>
                    <input type='password' name='password'>
                </div>
            </div>
            <div class='nameandinput'>
                <div class='name'>
                    Full name 
                </div> 
                <div class='input'>
                    <input type='text' name='fullName'>
                </div>
            </div>
                <input id="loginButton" type="submit" value="Sign up">
                <a href="login.php"><button id="loginButton">Back</button></a>
        </form>
    </div>
</body>


 