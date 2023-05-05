<?php
session_start();
/* include "isConnected.php"; */



$title="Login";
include "header.php";

?>

<head>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="signup.css">
<style>
.error {color: #FF0000;}
</style>
</head>

<body>

<header>
        <a href="#about" class="logo">
            <img src="image/logo.png" alt="">
        </a>
        <i class="fas fa-bars" id="menu-icon"></i>
        <ul class="navbar">
            <li id="home"><a href="./home.php">Home</a></li>
            <li><a href="./home.php #products">Products</a></li>
            <li id="reviews"><a href="./home.php #customers">Reviews</a></li>
            <li><a href="./kyufi game.php">PLAY</a></li>
            <li id="join"><a href="./joinus.php">JOIN US</a></li>
            <li id="abouticon"><a href="./home.php #about">About</a></li>
        </ul>
        <div class="header-icons">
            <button><i class="fas fa-shopping-cart" id="cart-btn"></i>  0</button>
            <button><i class="fas fa-search" id="search-btn"></i></button>
            <input type="text" style="border-radius: 500px; padding: 8px; color: black;" placeholder="Search drinks, stores...">
            <button id="lang"><i class="fas fa-globe"></i></button>  
            <a href="./login.php"><button id="user"><i class="fa-solid fa-user"></i></button></a>
        </div> 
    </header>

    
  

    <div class="login">
    <h1 class="animate__animated animate__bounce" >Sign In</h1><br>
<!-- <div class="container"> -->
    <form method="post" action="./login.inc.php">
    <!-- Email input -->
    <!-- <div class="form-outline mb-4"> -->
        <label class="form-label" for="loginEmail" id="loginEmailLabel" class="form-label" style="margin: 0; display: inline-block; float: left;"><b>Email address / UserName</b></label>    
        <input type="text" id="loginEmail" maxlength="254" class="form-control" name="uid_login"/>
    <!-- </div> -->

    <!-- Password input -->
    <!-- <div class="form-outline mb-4"> -->
        <label class="form-label" for="loginPassword" id="loginPasswordLabel" class="form-label" style="margin: 0; display: inline-block; float: left;"><b>Password</b></label>    
        <span style = "position:relative; left:80px; top:-5px;">Show password</span>
        <input type="checkbox" id="show-password" style = "position:relative; left:80px; top:-2px;">
        </label>
        <input type="password" id="loginPassword" class="form-control" name="pwd_login"/>
        <label>
        
    <!-- </div> -->

    <!-- 2 column grid layout for inline styling -->
    <!-- <div class="row mb-4">
        <div class="col"> -->
        <!-- Simple link -->
        <!-- <a href="#!">Forgot password?</a>  -->
        <br><!--  </div>
    </div> -->

    <!-- Submit button -->
    <?php 
    if (isset($_SESSION["login_empty"])) {?>
    <p class="text-danger">
    <?php echo $_SESSION["login_empty"];?>
    </p>
    <?php } ?>
    <button type="submit" name="submit_login" class="btn btn-primary">Submit</button>
    <br>
    <span>Don't have an account yet ?</span><br><a href="signup.php" class="text-primary"> Click here to Sign Up.</a>
       

       
</form>
</body>
<script>
    const passwordInput = document.getElementById('loginPassword');
const showPasswordCheckbox = document.getElementById('show-password');

showPasswordCheckbox.addEventListener('change', function() {
  if (this.checked) {
    passwordInput.type = 'text';
  } else {
    passwordInput.type = 'password';
  }
});
</script>
</html>