<?php 
    session_start();  
?>

<head>
<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>

<body id="loginBody">

    <div id="loginDiv">
    <h1>
    Logga in för att få tillgång till admin sidan! 
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
            <input id="submit" type="submit" value="Logga in">
            <a href="index.php">
                <button type="button">Tillbaka</button>
            </a>
        </form>
    </div>
</body>