<head>
<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<?php
?>    
<body id="loginBody">
    <div id="loginDiv">
    <h1>
    Please login to view the page 🤩
    </h1>
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
        <input id="submit" type="submit" value="PRESS ME">
    </form>
    </div>
</body>

