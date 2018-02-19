<?php
    session_start();
    // $_SESSION["users"];
    
    function signuplogin($users, $username, $password, $fullname ){
        #om $username INTE är tom:
        if(!empty($username) ){ 
            #Om användaren kommer från /signup.php:
            if($_SESSION["kommerfrånsignup"] == URLPREFIX."signup.php" ){
                
                #($username och $password inte är tom:
                if(!empty($username and !empty($password) )){

                    $tillfälligarray = array("username" => $username ,"password" =>  $password, "fullname" => $fullname, "regIP" => $_SERVER['REMOTE_ADDR']) ;
                    array_push($users,$tillfälligarray);
                    $_SESSION["users"] = $users;
                    
                    // $_POST["grattisNyKund"] = "Välkommen ".$username."!😄 <br/>Du är nu registrerad som ny kund hos oss!";
                    $_SESSION["newreguser"] = $fullname;
                    $_SESSION["loggedin"] = true; 
                    header("location:index.php");
                    
                }
                else{
                    echo "Du glömde fylla i username och/eller lösenord!";   
                }
            }    
        }
    }
    Function welcomeNewregmember(){
        if(!empty($_SESSION["newreguser"])){
            echo "<script>alert('Välkommen ".$_SESSION["newreguser"]."!😄 Du är nu registrerad som ny kund hos oss!')</script>";
        }
    }
    
    function login($users, $username, $password){
        
        #For loop som sedan kollar informationen användaren skrivit in mot informationen i $users arrayen
        if(isset($username)){
            for ($i = 0; $i < count($users); $i++){
                if($username == $users[$i]["username"] and $password == $users[$i]["password"]){
                    $_SESSION["fullname"] = $users[$i]["fullname"];
                    echo "<script>alert('Hello ". $_SESSION["fullname"] ."! Your IP adress is: ".$_SERVER['REMOTE_ADDR']." ');</script>";
                    
                    $_SESSION["loggedin"] = true; 
                    
                    break;
                }
            }
        }
    }

    function adminLogin($username,$password){
        if(!isset($_SESSION["adminloggedin"])){
            header("location:admin.php");
        }

        if(isset($username)){
            for ($i = 0; $i < count($users); $i++){
                if($username == $_SESSION["users"][$i]["username"] and $password == $_SESSION["users"][$i]["password"]){
                    $_SESSION["adminloggedin"] = true;        
                }
            }
        }
    }



    function echoRandomQuote() {
        $randomQoute = rand(1,5);

        switch ($randomQoute) {
            case 1:
            echo  "Not how long, but how well you have lived is the main thing. ~ Seneca  -  ";
            break;

            case 2:
            echo  "Life is what happens when you’re busy making other plans.” ~ John Lennon  -  ";
            break;

            case 3:
            echo  "Life is ten percent what happens to you and ninety percent how you respond to it. ~ Charles Swindoll  -  ";
            break;

            case 4:
            echo  "Keep calm and carry on. ~ Winston Churchill  -  ";
            break;

            case 5:
            echo  "Life is like a box of chocolates. You never know what you’re going to get. ~ Forrest Gump  -  ";
        }
    }
?>