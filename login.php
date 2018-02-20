<?php 
    session_start();
    if(empty($_SESSION["users"])){
        $_SESSION["users"]  = $users;
    }
?>

<head>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>

<body id="loginBody">
syns detta: <?php print_r($_POST["adminusername"]); ?> 
    <div id="loginDiv">
        <h1>
        Logga in för att få tillgång till sidan 🤩
        </h1>
        <form action='index.php' METHOD='POST'>      
            <div class='nameandinput'>
                <div class='name'>
                    Användarnamn: 
                </div> 
                <div class='input'>
                    <input type='text' name='username'>
                </div>
            </div>
            <div class='nameandinput'>
                <div class='name'>
                    Lösenord: 
                </div> 
                <div class='input'>
                    <input type='password' name='password'>
                </div>
            </div>
            <input id="submit" type="submit" value="Logga in">
        </form>
    </div>
    <div id="notAMemberDiv">
        <h3>Är du inte medlem?</h3>
        <a href="signup.php"><button id="loginButton">Registrera dig här</button></a>
    </div>
</body>

