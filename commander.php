<?php

include_once './CartRepository.php';

$cartrepo = new CartRepository();
if(isset($_COOKIE["user_id"])&&($cartrepo->findNProductsById(intval($_COOKIE["user_id"]))>0)){
    $nproducts = $cartrepo->findNProductsById(intval($_COOKIE["user_id"]));
} else {
    $nproducts=0;
}
?>


<?php
session_start();
include "isConnected.php"; 
include_once './ProductRepository.php';
include_once './CartRepository.php';
include_once './UserRepository.php';

$delivery=4.95;
$total=0;
$prorepo = new ProductRepository();
$cartrepo = new CartRepository();
$userrepo= new UserRepository();
$userpts= $userrepo->findUserPointsById($_COOKIE["user_id"]); 
$products = array();
if ($nproducts > 0) {
    $products = $cartrepo->findCartById($_COOKIE["user_id"]);
}

?>

<?php if($nproducts == 0): ?>
  <div style="display: flex; flex-direction: column; align-items: center;">
    <h2 style="color: red; margin-top: 100px">Your cart is currently empty.</h2>
    <img src="./images/empty.png" alt="" style="margin-top: 50px; width: 150px; height: auto;">
    <a href="./Products-Page-2.php"><button class="btn1" style="margin-top: 50px; background-color: rgb(176, 73, 17); color: white; width: 300px; height: 40px;     border-radius: 0.3rem;;font-weight: 500;  ">Add something to cart</button></a>
  </div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./styles/commander.css">
    <link rel="stylesheet" href="./styles/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="@import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;0,500;0,900;1,400;1,500;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@100;300;400;500;700&display=swap');" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

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
    <?php if($nproducts > 0): ?>
  <div class='container'>
      <div class='window'>
          <div class='order-info'>
              <div class='order-info-content'>
              <table>
                  <h2><b> Order Summary</b></h2>
                  <div class='line'></div>
                  <?php foreach($products as $product){
                  $item= $prorepo->findProductById($product);
                  $total=$total+$item['product_price'];
                  echo"
                  <table class='order-table'>
                      <tbody>
                      <tr>
                          <td><img src='"; 
                          echo $item['product_image']."' class='full-width'></img>
                          </td>
                          <td>
                              <br> <span class='thin'>";
                                  echo $item['product_name'].
                                          
                                  
                          "</td>

                      </tr>
                      <tr>
                          <td>
                              <div class='price'> ";
                                  
                                  echo "DT ".$item['product_price'].
                                  
                              "</div>
                    
                          </td>
                      </tr>
                      </tbody>
                      </table>
                      <div class='line'></div>";
                      }
                      $totalfinal=$total+$delivery-($userpts*0.05);
                      ?>
                  
              
          </div> 
          <div class='total'>
            <span style='float:left;'>
              <div class='thin dense'><b> Points :</b></div>
              <div class='thin dense'><b>Delivery :</b></div>
              <h6><b>TOTAL (-Points*5%) :</b></h6>
            </span>
                      <span style='float:right; text-align:right;'>
              <div class='thin dense'><?php echo $userpts ?></div>
              <b><div class='thin dense' ><?php echo "DT  ".$delivery ?></div>DT<span id='total'>
              
              <?php  echo $totalfinal ?></b>
              
              </span>
              <script>
              let totalfinal=document.getElementById("total").innerText ;
              document.cookie="totalfinal="+ totalfinal;</script>
              </span>
              </div>
          
      </div>
      
      <div class='credit-info'>
    <form method='POST' action='./checkout.php'>
      <div class='credit-info-content'>
        <table class='half-input-table'>
          <tr>
            <td>Please select your card :</td>
            <td>
              <div class='dropdown' id='card-dropdown'>
                <div class='dropdown-btn' id='current-card'>Visa</div>
                <div class='dropdown-select'>
                  <ul>
                    <li>BANCAIRE</li>
                    <li>E-DINAR</li>
                  </ul>
                </div>
              </div>
            </td>
          </tr>
        </table>
        <img src='https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png' height='80' class='credit-card-image' id='credit-card-image' />
        Last & First Name :
        <input class='input-field' type='text' name='name' required /> <hr>
        Address :
        <input class='input-field' type='text' name='address' required />
        <table class='half-input-table'> <hr>   
          <tr>
            <td>Phone Number :</td> 
            <td><br><input class='input-field' type='text' name='phone' required /></td>
          </tr>
          <tr>
            <td>Description :</td>
            <td><input class='input-field' type='text' name='description' required /></td>
          </tr>
        </table>
        <button class='pay-btn' type='submit' name='checkoutsubmit' >Checkout</button>
      </div>
    </form>
  </div>
  <?php endif; ?>
    
</div>
<script src="commander.js" ></script>
</body>
</html>

