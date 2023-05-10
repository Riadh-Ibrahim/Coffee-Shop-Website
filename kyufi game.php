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
include_once 'UserRepository.php';
$bestScore=$_COOKIE['best_score'];
$userrepo=new UserRepository();
$userpts=$userrepo->findUserPointsById($_COOKIE["user_id"]);


if($bestScore>$userpts){
    $userrepo->update($_COOKIE["user_id"],intval($bestScore));
    
}
$players = $userrepo->findHighestScore();

?>

<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset="UTF-8">
    <title>COUFI JUMPS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./styles/kyufi%20game.css">
    <link rel="stylesheet" href="./styles/home.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.6.0/p5.min.js" integrity="sha512-3RlxD1bW34eFKPwj9gUXEWtdSMC59QqIqHnD8O/NoTwSJhgxRizdcFVQhUMFyTp5RwLTDL0Lbcqtl8b7bFAzog==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="@import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;0,500;0,900;1,400;1,500;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@100;300;400;500;700&display=swap');" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.6.0/p5.js" integrity="sha512-DWtDo/6AXxH1t9p7GCWqmC4XTVK/eje94XTV6QYB39rGllLN8Tr3izDf6lkmebgqRnYh4wtSFm4CvBoA9SrdpA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.3/howler.min.js" integrity="sha512-6+YN/9o9BWrk6wSfGxQGpt3EUK6XeHi6yeHV+TYD2GR0Sj/cggRpXr1BrAQf0as6XslxomMUxXp2vIl+fv0QRA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</header>
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
            <button id="shopping" style="font-size: 14px"><i class="fas fa-shopping-cart" id="cart-btn"></i><span id="cart-count"> <?php echo $nproducts ?> </span></button>
            <script>
                    const cartButton = document.querySelector('#shopping');
                    cartButton.addEventListener('click', () => {
                    window.location.href = 'commander.php';
                    });
            </script>
                
            <button id="search-btn" style="font-size: 14px"><i class="fas fa-search" ></i></button>
            <input id="search-input" onkeyup="search()" type="text" placeholder="Search drinks, stores..." >
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
            } ?>><button class="header-btn" style="text-decoration: none;"><i class="fa-solid fa-user"></i></button></a>
             <?php if((isset($_COOKIE['user_uid']))&&(isset($_COOKIE['user_id']))){
                ?>
                <a href="./logout.inc.php"><button class="header-btn"><i class="fa fa-sign-out"></i></button></a>
                <?php
             } ?>
        </div>
</header>
<main >
    <div class="left-box">
    <div style="width: 320px; margin-left: 25%; margin-top: 8%;">
        <img id="left-arrow-img" src="https://github.com/YoussefSahnoun/doodle-images/blob/main/image_2023-04-26_130824412-removebg-preview.png?raw=true" >
    </div>
    <div style="width: 600px; margin-left: 5%; margin-top: 10%;">
        <img id="right-arrow-img" src="https://github.com/YoussefSahnoun/doodle-images/blob/main/image_2023-04-26_130824412-removebg-preview%20right.png?raw=true">
    </div>
    </div>
    
    <div class="game-container" id="game" onclick="mousePressedOnGame()">
            <div id="score-label" > Your Highest Session Score : <span id="live-highscore" ></span></div>    
    </div>
    <script src="kyufi%20game.js" ></script>
    <div class="leaderboard-container">
            <table>
  <tr>
    <th style="width:70%; color:black; border-bottom: 1px solid black;">Top players</th>
    <th style="width:30%; color:black; border-bottom: 1px solid black;">Score</th>
  </tr>
  <tr><td colspan="2"></td></tr>
  <?php foreach($players as $player){
    echo "<tr>
      <td>".$player->users_uid."</td>
      <td>".$player->users_points."</td>
    </tr>";
  } ?>
</table>

    </div>
</main>
</body>
</html>