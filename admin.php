<?php 
    session_start();  
?>

<head>
<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>

<body id="loginBody">
    <div id="loginDiv">
    <h1>
    Login for to view the admin page! 
    </h1>
        <form action='results.php' METHOD='POST'>      
            <div class='nameandinput'>
                <div class='name'>
                    Username: 
                </div> 
                <div class='input'>
                    <input type='text' name='adminusername'>
                </div>
            </div>
            <div class='nameandinput'>
                <div class='name'>
                    Password: 
                </div> 
                <div class='input'>
                    <input type='password' name='adminpassword'>
                </div>
            </div>
            <input id="submit" type="submit" value="PRESS ME">
        </form>
    </div>
</body>