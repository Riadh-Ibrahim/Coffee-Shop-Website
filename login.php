<?php
session_start();
/* include "isConnected.php"; */

$title="Login";
include "header.php";

?>
<?php

include_once './CartRepository.php';

$cartrepo = new CartRepository();
if(isset($_COOKIE["user_id"])&&($cartrepo->findNProductsById(intval($_COOKIE["user_id"]))>0)){

$nproducts = $cartrepo->findNProductsById(intval($_COOKIE["user_id"]));
} else {
    $nproducts=0;
}
?>
<head>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<link rel="stylesheet" type="text/css" href="./styles/home.css">
<link rel="stylesheet" type="text/css" href="./styles/signup.css">
<style>
.error {color: #FF0000;}
</style>
</head>

<body>

<header>
        <a href="./home.php #about" class="logo">
            <img src="images/logo.png" alt="">
        </a>
        <i class="fas fa-bars" id="menu-icon"></i>
        <ul class="navbar">
            <li id="home"><a style="font-size: 20px;" href="./home.php">Home</a></li>
            <li><a style="font-size: 20px;" href="./home.php #products">Products</a></li>
            <li id="reviews"><a style="font-size: 20px;" href="./home.php #customers">Reviews</a></li>
            <li><a style="font-size: 20px;" href="./kyufi game.php">PLAY</a></li>
            <li id="join"><a style="font-size: 20px;" href="./joinus.php">JOIN US</a></li>
            <li id="abouticon"><a style="font-size: 20px;" href="./home.php #about">About</a></li>
        </ul>
        <div class="header-icons" style="height:40px">
            <button id="shopping" style="font-size: 12px"><i class="fas fa-shopping-cart" id="cart-btn"></i><span id="cart-count"> <?php echo $nproducts ?> </span></button>
            <script>
                    const cartButton = document.querySelector('#shopping');
                    cartButton.addEventListener('click', () => {
                    window.location.href = 'commander.php';
                    });
            </script>
                
            <button id="search-btn" style="font-size: 14px"><i class="fas fa-search" ></i></button>
            <input style="width:180px; font-size:15px" id="search-input" onkeyup="search()" type="text" placeholder="Search drinks, stores..." >
            <button id="lang" ><i class="fas fa-globe" style="font-size: 16px"></i></button>  

            <script>
                let globe=document.getElementById('lang');
                globe.addEventListener('click', function(){
                    window.location.href="./traduction.php";
                });
            </script>
            
            <a href=<?php if(!(isset($_COOKIE['user_uid']))||!(isset($_COOKIE['user_id']))){ echo "./login.php"; } 
            else{
                echo "account.php";
            } ?>><button style="font-size: 14px"  class="header-btn" style="text-decoration: none;"><i class="fa-solid fa-user"></i></button></a>
             <?php if((isset($_COOKIE['user_uid']))&&(isset($_COOKIE['user_id']))){
                ?>
                <a href="./logout.inc.php"><button style="font-size: 14px" class="header-btn"><i class="fa fa-sign-out"></i></button></a>
                <?php
             } ?>
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