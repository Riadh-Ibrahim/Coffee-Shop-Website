<?php
session_start();

if(isset($_POST["submit_login"])) 

{
    
    //Grabbing the Data
    
    $uid_login=$_POST["uid_login"];
    $pwd_login=$_POST["pwd_login"];

    echo $uid_login;
    echo $pwd_login;
    //Instanciating Signup contr class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    

    $login= new LoginContr($uid_login, $pwd_login);

    // Error Handling
       $login->loginUser();

       /*if(!isset($_SESSION["userid"])){
        echo "not working";
       } else {echo "working";}*/

    //Going back to front page
        header("Location: ../index.php?error=none");
    }

