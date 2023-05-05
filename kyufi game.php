<?php
session_start();
 include "isConnected.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset="UTF-8">
    <title>COUFI JUMPS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="" crossorigin="anonymous"/>
    <link rel="stylesheet" href="styles/kyufi%20game.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="@import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;0,500;0,900;1,400;1,500;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@100;300;400;500;700&display=swap');" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.6.0/p5.js" integrity="sha512-DWtDo/6AXxH1t9p7GCWqmC4XTVK/eje94XTV6QYB39rGllLN8Tr3izDf6lkmebgqRnYh4wtSFm4CvBoA9SrdpA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.3/howler.min.js" integrity="sha512-6+YN/9o9BWrk6wSfGxQGpt3EUK6XeHi6yeHV+TYD2GR0Sj/cggRpXr1BrAQf0as6XslxomMUxXp2vIl+fv0QRA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</header>
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

<main >
    <div class="left-box">
        <img id="left-arrow-img" src="https://github.com/YoussefSahnoun/doodle-images/blob/main/image_2023-04-26_130824412-removebg-preview.png?raw=true" width=45% hight=auto>
        <div></div>
        <img id="right-arrow-img" src="https://github.com/YoussefSahnoun/doodle-images/blob/main/image_2023-04-26_130824412-removebg-preview%20right.png?raw=true" width=50% height="auto"></div>
    </div>
    <div class="game-container" id="game" onclick="mousePressedOnGame()">
        <script src="kyufi%20game.js" ></script>
    </div>
    <div class="leaderboard-container">

            <table>

                <tr>
                    <th style="width : 70%">Top players</th>
                    <th style ="width: 30%">Score</th>

                </tr>


                <tr>
                    <td></td>
                    <td></td>

                </tr>
                <tr>
                    <td></td>
                    <td></td>

                </tr>
                <tr>
                    <td></td>
                    <td></td>

                </tr>
                <tr>
                    <td></td>
                    <td></td>

                </tr>
                <tr>
                    <td> </td>
                    <td></td>
                </tr>

            </table>
    </div>




</main>
</body>


</html>