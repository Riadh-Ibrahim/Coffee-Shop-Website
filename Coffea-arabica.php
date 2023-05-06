<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Arabica</title>
    <link rel="stylesheet" href="./styles/styles3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="@import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;0,500;0,900;1,400;1,500;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@100;300;400;500;700&display=swap');" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS -->
    <link href="style.css" rel="stylesheet">
</head>
<body style="background-color:#fffff0;">
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
                window.location.href = 'shopping cart.php';
                });
        </script>
            
        <button id="search-btn"><i class="fas fa-search" ></i></button>
        <input id="search-input" onkeyup="search()" type="text" placeholder="Search drinks, stores...">
        <button id="lang"><i class="fas fa-globe"></i></button>  

        
        <a href=<?php if(!(isset($_COOKIE['user_uid']))||!(isset($_COOKIE['user_id']))){ echo "./login.php"; } 
        else{
            echo "userinfo.php";
        } ?>><button id="user" style="text-decoration: none;"><i class="fa-solid fa-user"></i></button></a>
         <?php if((isset($_COOKIE['user_uid']))&&(isset($_COOKIE['user_id']))){
            ?>
            <a href="./logout.inc.php"><button><i class="fa fa-sign-out"></i></button></a>
            <?php
         } ?>
    </div>
</header>
    <main class="container2">

        <div class="left-column">
          <img  src="images/Arabica.jpg" alt="">
        </div>
  
  
        <!-- Right Column -->
        <div class="right-column">
  
          <!-- Product Description -->
          <div class="product-description">
            <span>Coffee</span>
            <h1>Coffee Arabica
            </h1>
            <p>Coffea arabica, also known as the Arabic coffee, is a species of flowering plant in the coffee and madder family Rubiaceae. It is believed to be the first species of coffee to have been cultivated and is currently the dominant cultivar, representing about 60% of global production.</p>
          </div>
  
          <!-- Product Configuration -->
          <div class="product-configuration">


          <div class="product-configuration">
            <div class="Coffee-config">
              <span>Choose Your Preferred Size :</span>
  
              <div class="Coffee-choose">
                <div class="btn-group" style="width:100%">

                  <button style="width:50%" >Large Sized Cup</button>
                  <button style="width:50%" >Medium Sized Cup</button></div>
  
              <a href="#">Contact Us For More Info</a>
            </div>
          </div>
  
          <!-- Product Pricing -->
          <div class="product-price">
            <span>2.49$</span>
            <h6 class="text-muted ml-2"><del>$5.99</del></h6>
            <span></span>
              
            <a href="#" class="cart-btn">Add to cart</a>
          </div>
        </div>


      </main>
  
      <!-- Scripts -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
      <script src="script.js" charset="utf-8"></script>

</body>
</html>