<?php
session_start();
include('isConnected.php');
include('UsersRepository.php');

$user_id=$_SESSION['userid'];
$uspro= new UsersRepository();
$item=$uspro->findUserById($user_id);

include_once './CartRepository.php';

$cartrepo = new CartRepository();
if(isset($_COOKIE["user_id"])&&($cartrepo->findNProductsById(intval($_COOKIE["user_id"]))>0)){

$nproducts = $cartrepo->findNProductsById(intval($_COOKIE["user_id"]));
} else {
    $nproducts=0;
}



function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $firstname = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
      $nameErr = "Only letters and white space allowed";
    }
  }


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["pass"])) {
      $passwordErr = "password is required";
    } else {
      $password = test_input($_POST["pass"]);
      // check if password coontains more than 8 characters
      if (strlen ($password < 8)) {
         $passwordErr = "Password must contain at least 8 characters";
      }
       }
        }}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>

    <!-- Custom Css -->
    <link rel="stylesheet" href="./styles/accountstyle.css">
    <link rel="stylesheet" href="./styles/home.css">

    <link rel="stylesheet" href="../Coffee-Shop-Website-main/styles/home.css">

    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

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

    <!-- Sidenav -->
    <div class="sidenav">
        <div class="profile">
            <img src="./images/emna.jpg" alt="" >

            <div class="name">
            <?php  echo $item ['users_uid']; 
            ?>
            </div>
        </div>

        <div class="sidenav-url">
            <div class="url">
                <a href="./account.php" class="active">Profile</a>
                <hr align ="center">
            </div>
            <div class="url">
                <a  href="#settings">Settings</a>
                <hr align  ="center">
            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Main -->
    <div class="main">
        <h2>EDIT PROFILE</h2>
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
               <form method= "post" action="AddUser.php" >
                 <table>
                    <tbody>
                        <tr>
                            <td>Edit Userame</td>
                            <td>:</td>
                            <td>  <input type="text" id="name" name="name" required>
                             </td>
                        </tr>
                        <tr>
                            <td>Edit password</td>
                            <td>:</td>
                            <td>  <input type="Password" id="loginPassword" name="loginPassword" required>
                            <br>
                            <input type="checkbox" id="show-password" > Show password
                            </td>
                        </tr>
                        <tr>

                        <?php if (isset($passwordErr)){
                            ?>
                            <p class="text-danger"><?php echo $passwordErr; ?> </p>
                            <?php
                        }
                        ?>
                        <?php if (isset($nameErr)){
                            ?>
                            <p class="text-danger"><?php echo $nameErr; ?> </p>
                            <?php
                        }
                        ?>  
                             <td colspan="3" align="right">
                             <input type="submit" name="envoi" value="Submit">
                             </td>
                         </tr>


                    </tbody>
                </table>
                </form>
                        <td colspan="3" align="right" >
                             <button id="delete"> Delete Account</button>
                             </td>
            </div>
        </div>
   </div>
</div>

</body>


<script src="DeleteButton.js"> </script>
<script src ="show.js">

</script>
</html>
