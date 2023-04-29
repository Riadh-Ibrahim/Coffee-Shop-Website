<?php
$title="SignUp";
include "header.php";
include "./includes/signup.inc.php";
session_start();


?>

<head>
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
            <li id="home"><a href="./Coffee-Shop-Website-main/index.html">Home</a></li>
            <li><a href="#products">Products</a></li>
            <li id="reviews"><a href="#customers">Reviews</a></li>
            <li><a href="#about">PLAY</a></li>
            <li id="join"><a href="#join">JOIN US</a></li>
            <li id="abouticon"><a href="#about">About</a></li>
        </ul>
        <div class="header-icons">
            <button><i class="fas fa-shopping-cart" id="cart-btn"></i>  0</button>
            <button><i class="fas fa-search" id="search-btn"></i></button>
            <input type="text" style="border-radius: 500px; padding: 8px; color: black;" placeholder="Search drinks, stores...">
            <button id="lang"><i class="fas fa-globe"></i></button>  
            <button id="user"><i class="fa-solid fa-user"></i></button> 
        </div> 
    </header>


<div class="login">
    <h1 class="animate__animated animate__bounce" >Sign Up</h1><br>
    <span class="error">* Required Field</span>
<!-- <div class="row login">
  <div class="mx-auto col-10 col-md-8 col-lg-6"> -->
  <form method="POST" action="includes/signup.inc.php">
    <!-- <div class="form-row">
      <div class="form-group col-md-12"> -->
        <label for="inputUsername4" class="form-label" style="margin: 0; display: inline-block; float: left;"><b>* Username</b></label><br>
        <input  class="form-control" type="text" class="form-control" id="inputUsername4" placeholder="Username" 
        value="<?php if((!isset($_SESSION["allok"]))&&(isset($_SESSION["correctuid"]))) {echo $_SESSION["correctuid"];unset($_SESSION["correctuid"]);}?>" name="uid">
        <?php
          if(isset($_SESSION["invaliduiderror"])){
            ?>
             <p class="text-danger"> <?= $_SESSION["invaliduiderror"] ?></p>
        
          <?php
          unset($_SESSION["invaliduiderror"]);
          unset($_SESSION["wronguid"]);
          
        }
        ?>
      <!-- </div> -->
      <!-- <div class="form-group col-md-12"> -->
        <label for="inputPassword4" class="form-label" style="margin: 0; display: inline-block; float: left;"><b>* Email</b></label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email" 
        value="<?php if((!isset($_SESSION['allok']))&&(isset($_SESSION["correctemail"]))) {echo $_SESSION["correctemail"];unset($_SESSION["correctemail"]);}?>" name="email">
        <?php
          if(isset($_SESSION["invalidemailerror"])){
            ?>
             <p class="text-danger"> <?= $_SESSION["invalidemailerror"] ?></p>
        
          <?php
          unset($_SESSION["invalidemailerror"]);
          unset($_SESSION["wrongemail"]);

        }
         ?>
      <!-- </div>
    </div> -->
    <!-- <div class="form-row">
      <div class="form-group col-md-12"> -->
        <label for="inputPassword4" class="form-label" style="margin: 0; display: inline-block; float: left;"><b>* Password</b></label>
        <input type="checkbox" id="show-password1" style = "position:relative; left:120px; top:2px;"> <span style = "position:relative; left:120px; top:0px;">Show</span>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Password" value="<?php if((!isset($_SESSION['allok']))&&(isset($_SESSION["correctpwd"]))) {echo $_SESSION["correctpwd"];unset($_SESSION["correctpwd"]);}?>" name="pwd">
        <label>
        </label>
      <!-- </div>
      <div class="form-group col-md-12"> -->
        <label for="inputPassword4" class="form-label" style="margin: 0; display: inline-block; float: left;"><b>* Repeat Password</b></label>
        <input type="checkbox" id="show-password2"style = "position:relative; left:80px; top:2px;"> <span style = "position:relative; left:80px; top:0px;">Show</span>
        <input type="password" class="form-control" id="inputRepeatPWD" placeholder="Repeat Password" value="<?php if((!isset($_SESSION['allok']))&&(isset($_SESSION["correctpwd"]))) {echo $_SESSION["correctpwd"];unset($_SESSION["correctpwd"]);}?>" name="pwdrepeat">
        <label>
        </label>
      <!-- </div> -->
      <?php
          if(isset($_SESSION["pwdmatcherror"])){
            ?>
             <p class="text-danger"> <?= $_SESSION["pwdmatcherror"] ?></p>
        
          <?php
        }
        unset($_SESSION["pwdmatcherror"]);
        unset($_SESSION["wrongpwd"]);
        ?>
    <!-- </div> -->
    <!-- <div class="form-outline mb-3" style="width: 100%; max-width: 22rem"> -->
        <label class="form-label" for="phone" style="margin: 0; display: inline-block; float: left;"><b>* Phone Number</b></label>    
        <input type="text" id="phone" class="form-control" placeholder="+216 ********" data-mdb-input-mask="+216 999-999-999" 
        value="<?php if((!isset($_SESSION['allok']))&&(isset($_SESSION["correcttel"]))) {echo $_SESSION["correcttel"];unset($_SESSION["correcttel"]);}?>" name="tel">
        
        
        <?php
          if(isset($_SESSION["invalidtelerror"])){
            ?>
             <p class="text-danger"> <?= $_SESSION["invalidtelerror"] ?></p>
        
          <?php
        
        unset($_SESSION["invalidtelerror"]);
        unset($_SESSION["wrongtel"]);
      }
      ?>
    <!-- </div>

    
    <div class="form-row"> -->
      <!-- <div class="form-group col-md-12">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" placeholder="Example : Nabeul" id="inputCity" name="city">
      </div> -->
      <!-- <div class="form-group col-md-12"> -->
        <label for="inputAddress" class="form-label" style="margin: 0; display: inline-block; float: left;"><b style = "position:relative; left:8px; top:0px;">Address</b></label>  
        <input type="text" class="form-control" id="inputAddress" placeholder="Nabeul, Rue de la République" 
        value="<?php if((!isset($_SESSION['allok']))&&(isset($_SESSION["correctaddress"]))) {echo $_SESSION["correctaddress"];unset($_SESSION["correctaddress"]);}?>" name="address">
        <?php
          if(isset($_SESSION["invalidaddresserror"])){
            ?>
             <p class="text-danger"> <?= $_SESSION["invalidaddresserror"] ?></p>
        
          <?php
          unset($_SESSION["invalidaddresserror"]);
          unset($_SESSION["wrongaddress"]);
        }
        ?>
      <!-- </div> -->
    <?php if(isset($_SESSION["emptyerror"])){
      ?> <p class="text-danger"> <?php echo $_SESSION["emptyerror"]; unset($_SESSION["emptyerror"]);?> </p>
    <?php } ?>
    <!-- </div> -->
    <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
  </form>
  <span>Already have an account ?</span><br><a href="login.php" class="text-primary"> Click here to sign in.</a>
<!-- </div> -->
<!-- </div> -->
    </div>
</body>
<script>
  const passwordInput1 = document.getElementById('inputPassword4');
const showPasswordCheckbox1 = document.getElementById('show-password1');

showPasswordCheckbox1.addEventListener('change', function() {
  if (this.checked) {
    passwordInput1.type = 'text';
  } else {
    passwordInput1.type = 'password';
  }
});

const passwordInput2 = document.getElementById('inputRepeatPWD');
const showPasswordCheckbox2 = document.getElementById('show-password2');

showPasswordCheckbox2.addEventListener('change', function() {
  if (this.checked) {
    passwordInput2.type = 'text';
  } else {
    passwordInput2.type = 'password';
  }
});
</script>
</html>