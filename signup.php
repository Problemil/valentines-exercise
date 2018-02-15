<?php 
include "variabels.php";
include "functions/functionsignup.php";
$pagetitle = "Sign up"; ?>

<head>
<title>
    <?php 
    // Funktion för att sätta sidnamn på varje sida där $pagetitle finns
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
        <form action='signup.php' METHOD='POST'>      
            <div class='nameandinput'>
                <div class='name'>
                    Username: 
                </div> 
                <div class='input'>
                    <input type='text' name='signupusername'>
                </div>
            </div>
            <div class='nameandinput'>
                <div class='name'>
                    Password: 
                </div> 
                <div class='input'>
                    <input type='password' name='signuppassword'>
                </div>
            </div>
            <div class='nameandinput'>
                <div class='name'>
                    Full name 
                </div> 
                <div class='input'>
                    <input type='text' name='signupfullName'>
                </div>
            </div>
                <input id="loginButton" type="submit" value="Sign up">
                <a href="login.php"><button type="button" id="loginButton">Back</button></a>
        </form>
        <?php print_r($users);
        ?>
    </div>
</body>


 