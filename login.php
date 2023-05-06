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
<!-- <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="signup.css"> -->
    <link rel="stylesheet" type="text/css" href="./styles/joinus.css">
<style>
.error {color: #FF0000;}
</style>
<!-- <link rel="stylesheet" href="./styles/rate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="@import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;0,500;0,900;1,400;1,500;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@100;300;400;500;700&display=swap');" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
     <link rel="stylesheet" href="signup.css"> --> 
</head>

<body>

<header>
        <a href="./home.php #about" class="logo">
            <img src="images/logo.png" alt="">
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
            <button id="shopping"><i class="fas fa-shopping-cart" id="cart-btn"></i><span id="cart-count"> 0</span></button>
            <script>
                    const cartButton = document.querySelector('#shopping');
                    cartButton.addEventListener('click', () => {
                    window.location.href = 'shopping cart.html';
                    });
            </script>
                
            <button id="search-btn"><i class="fas fa-search" ></i></button>
            <input id="search-input" onkeyup="search()" type="text" placeholder="Search drinks, stores...">
            <button id="lang"><i class="fas fa-globe"></i></button>  

            
            <a href="./login.php"><button id="user" style="text-decoration: none;"><i class="fa-solid fa-user"></i></button></a>
            
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
            <?php
             if(isset($_SESSION["wrongpassword"])){
                ?>
                <p class="text-danger" style="margin-bottom: -1px;margin-top: -5px;"><?php echo $_SESSION["wrongpassword"] ?></p>
              <?php 
              unset($_SESSION["wrongpassword"]);
              }
              ?>
        
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