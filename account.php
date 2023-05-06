<?php
include('UsersRepository.php');
//session_start();
// $user_id=$_SESSION['userid'];
$uspro= new UsersRepository();
$item=$uspro->findUserById('44');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>

    <!-- Custom Css -->
    <link rel="stylesheet" href="accountstyle.css">
    <link rel="stylesheet" href="../Coffee-Shop-Website-main/styles/home.css">

    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body>
    <header>
        <a href="#about" class="logo">
            <img src="../Coffee-Shop-Website-main/images/logo.png" alt="">
        </a>
        <i class="fas fa-bars" id="menu-icon"></i>
        <ul class="navbar">
            <li id="home"><a href="#home">Home</a></li>
            <li><a href="#products">Products</a></li>
            <li id="reviews"><a href="#customers">Reviews</a></li>
            <li><a href="./kyufi game.html">PLAY</a></li>
            <li id="join"><a href="">JOIN US</a></li>
            <li id="abouticon"><a href="#about">About</a></li>
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
            <button id="user"><i class="fa-solid fa-user"></i></button> 
        </div>
    </header>

    <!-- Sidenav -->
    <div class="sidenav">
        <div class="profile">
            <img src="./emna.jpg" alt="" >

            <div class="name">
            <?php  echo $item ['users_uid']; 
            ?>
            </div>
        </div>

        <div class="sidenav-url">
            <div class="url">
                <a href="#profile" class="active">Profile</a>
                <hr align ="center">
            </div>
            <div class="url">
                <a href="#settings">Settings</a>
                <hr align  ="center">
            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Main -->
    <div class="main">
        <h2>IDENTITY</h2>
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <table>
                    <tbody>


                    
                        <tr>
                            <td>Userame</td>
                            <td>:</td>
                            <td> <?php  echo $item['users_uid']; 
                             ?>
                             </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td> <?php  echo $item['users_email'];  ?></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td> <?php  echo $item['users_address'];  ?></td>
                        </tr>
                        <tr>
                            <td>Point Count</td>
                            <td>:</td>
                            <td>5100</td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td>:</td>
                            <td><?php  echo $item['users_tel'];  ?></td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
   </div>
</div>

</body>
</html>
