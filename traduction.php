<?php

include_once './CartRepository.php';

$cartrepo = new CartRepository();
if(isset($_COOKIE["user_id"])&&($cartrepo->findNProductsById(intval($_COOKIE["user_id"]))>0)){

$nproducts = $cartrepo->findNProductsById(intval($_COOKIE["user_id"]));
} else {
    $nproducts=0;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop</title>
    <link rel="stylesheet" href="./styles/traduction.css">
    <link rel="stylesheet" href="./styles/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="@import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;0,500;0,900;1,400;1,500;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@100;300;400;500;700&display=swap');" rel="stylesheet">  
</head>
<body>
<header>
        <a href="./home.php #about" class="logo">
            <img src="images/logo.png" alt="">
        </a>
        <i class="fas fa-bars" id="menu-icon"></i>
        <ul class="navbar">
            <li id="home"><a href="./home.php">Accueil</a></li>
            <li><a href="./home.php #products">Produits</a></li>
            <li id="reviews"><a href="./home.php #customers">Avis</a></li>
            <li><a href="./kyufi game.php">Jouer</a></li>
            <li id="join"><a href="./joinus.php">Rejoignez-nous</a></li>
            <li id="abouticon"><a href="./home.php #about">Info</a></li>
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
                    window.location.href="./home.php";
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
    <section class="home" id="home1">
        <div class="home-text">
            <h1>Commencez <br>Votre Journée <br>Avec un café </h1>
            <br>
            <p> <b>Votre bonne humeur est assurée par notre café.</b></p>
            <br>
            <a href="" class="btn" id="fbtn">Notre collection</a>
            <a href="" class="btn">Nous trouver</a>
        </div>

        <div class="product-list">
            <div class="product">
                <a href="./Frappucino.html" class="product-link">
                  <img src="./images/img1.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Frappuccino</b></p>
                    <h3 class="product-price">8 DT</h3>
                  </div>
                </a>    
            </div>
            <hr style="color: aliceblue;">

            <div class="product">
                <a href="./Caramel-Coffee.html" class="product-link">
                  <img src="./images/img2.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Café Caramel</b></p>
                    <h3 class="product-price">7.5 DT</h3>
                  </div>
                </a>    
            </div>
            <hr style="color: aliceblue;">

            <div class="product">
                <a href="./Iced-Coffee.html" class="product-link">
                  <img src="./images/img3.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Café glacé</b></p>
                    <h3 class="product-price">6 DT</h3>
                  </div>
                </a>    
            </div>
            <hr style="color: aliceblue;">

            <div class="product">
                <a href="./Strawberry-juice.html" class="product-link">
                  <img src="./images/img4.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Jus de fraise</b></p>
                    <h3 class="product-price">12 DT</h3>
                  </div>
                </a>    
            </div>
            <hr style="color: aliceblue;">

            <div class="product">
                <a href="./Coffea-arabica.html" class="product-link">
                  <img src="./images/Arabica.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Café Arabica</b></p>
                    <h3 class="product-price">5.99 DT</h3>
                  </div>
                </a>    
            </div>
            <hr style="color: aliceblue;">

            <div class="product">
                <a href="./Americano.html" class="product-link">
                  <img src="./images/Americano.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Américain</b></p>
                    <h3 class="product-price">4.99 DT</h3>
                  </div>
                </a>    
            </div>
            <hr style="color: aliceblue;">

            <div class="product">
                <a href="./Espresso.html" class="product-link">
                  <img src="./images/Espresso.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Expresso</b></p>
                    <h3 class="product-price">3.99 DT</h3>
                  </div>
                </a>    
            </div>
            <hr style="color: aliceblue;">

            <div class="product">
                <a href="./mango-Juice.html" class="product-link">
                  <img src="./images/Mango.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Jus de mangue</b></p>
                    <h3 class="product-price">12 DT</h3>
                  </div>
                </a>    
            </div>
            <hr style="color: aliceblue;">

            <div class="product">
                <a href="./Hot-Tea.html" class="product-link">
                  <img src="./images/T.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Thé chaud</b></p>
                    <h3 class="product-price">4.5 DT</h3>
                  </div>
                </a>    
            </div>
            <hr style="color: aliceblue;">

            <div class="product">
                <a href="./German-cake.html" class="product-link">
                  <img src="./images/img5.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>German Cake</b></p>
                    <h3 class="product-price">19.99 DT</h3>
                  </div>
                </a>    
            </div>
            <hr style="color: aliceblue;">

            <div class="product">
                <a href="./Chocolate-Donuts.html" class="product-link">
                  <img src="./images/img6.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Chocolate Donuts</b></p>
                    <h3 class="product-price">4.99 DT</h3>
                  </div>
                </a>    
            </div>
            <hr style="color: aliceblue;">

            <div class="product">
                <a href="./Chocolate-cake.html" class="product-link">
                  <img src="./images/img7.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Chocolate Cake</b></p>
                    <h3 class="product-price">3.99 DT</h3>
                  </div>
                </a>    
            </div>
            <hr style="color: aliceblue;">
            
            <div class="product">
                <a href="./Our-cookies.html" class="product-link">
                  <img src="./images/img8.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Nos Patisseries</b></p>
                    <h3 class="product-price">9.5 DT</h3>
                  </div>
                </a>
            </div>
            <hr style="color: aliceblue;">
            
            <div class="product">
                <a href="./red-velvet.html" class="product-link">
                  <img src="./images/red-velvet.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Red Velvet</b></p>
                    <h3 class="product-price">5.5 DT</h3>
                  </div>
                </a>
            </div>
            <hr style="color: aliceblue;">
            
            <div class="product">
                <a href="./cupcakes.html" class="product-link">
                  <img src="./images/CUpcakes.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Cupcakes</b></p>
                    <h3 class="product-price">6.99 DT</h3>
                  </div>
                </a>
            </div>
            <hr style="color: aliceblue;">
            
            <div class="product">
                <a href="./Black-forest.html" class="product-link">
                  <img src="./images/Black-forest.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Black Forest Cake</b></p>
                    <h3 class="product-price"> 22.99 DT</h3>
                  </div>
                </a>
            </div>
            <hr style="color: aliceblue;">
            
            <div class="product">
                <a href="./Genoise-sponge.html" class="product-link">
                  <img src="./images/Genoise-sponge.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Genoise Sponge</b></p>
                    <h3 class="product-price">17.99 DT</h3>
                  </div>
                </a>
            </div>
            <hr style="color: aliceblue;">
            
            <div class="product">
                <a href="./pancakes.html" class="product-link">
                  <img src="./images/Pancakes.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Pancakes</b></p>
                    <h3 class="product-price">12.5 DT</h3>
                  </div>
                </a>
            </div>
        </div>
    </section>

    <section>
        <div>
            <img src="images/img.png" alt="">
        </div>
    </section>

    <section class="products" id="products">
        <div class="heading">
            <h2>Produits Populaires:</h2>
        </div>
        <div class="products-container">
            <div class="box">
                <a href="./Frappucino.html"><img src="images/img1.jpg" alt="">
                    <h3>Frappuccino</h3>
                </a>
                <div class="content">
                    <span>8 DT</span>
                    <a class="add-to-cart" href="#">Ajouter au panier</a>
                </div>
            </div>

            <div class="box">
                <a href="./Caramel-Coffee.html"><img src="images/img2.jpg" alt="">
                    <h3>Café Caramel</h3>
                </a>
                <div class="content">
                    <span>7.5 DT</span>
                    <a class="add-to-cart" href="./shopping cart.html">Ajouter au panier</a>
                </div>
            </div>

            <div class="box">
                <a href="./Iced-Coffee.html"><img src="images/img3.jpg" alt="">
                    <h3>Café glacé</h3>
                </a>
                <div class="content">
                    <span>6 DT</span>
                    <a class="add-to-cart" href="./shopping cart.html">Ajouter au panier</a>
                </div>
            </div>
            
            <div class="box">
                <a href="./Strawberry-juice.html"><img src="images/img4.jpg" alt="">
                    <h3>Jus de fraise</h3>
                </a>
                <div class="content">
                    <span>12 DT</span>
                    <a class="add-to-cart" href="./shopping cart.html">Ajouter au panier</a>
                </div>
            </div>
            <div class="box">
                <a class="add-to-cart" href="./German-cake.html"><img src="images/img5.jpg" alt="">
                    <h3>Gâteau allemand</h3>
                </a>
                <div class="content">
                    <span>19.99 DT</span>
                    <a class="add-to-cart" href="./shopping cart.html">Ajouter au panier</a>
                </div>
            </div>
            <div class="box">
                <a href="./Chocolate-Donuts.html"><img src="images/img6.jpg" alt="">
                    <h3>Beignets au chocolat</h3>
                </a>
                <div class="content">
                    <span>4.99 DT</span>
                    <a class="add-to-cart" href="./shopping cart.html">Ajouter au panier</a>
                </div>
            </div>
            <div class="box">
                <a href="./Chocolate-cake.html"><img src="images/img7.jpg" alt="">
                    <h3>Gateau au chocolat</h3>
                </a>
                <div class="content">
                    <span>3.99 DT</span>
                    <a class="add-to-cart" href="./shopping cart.html">Ajouter au panier</a>
                </div>
            </div>
            <div class="box">
                <a href="./Our-cookies.html"><img src="images/img8.jpg" alt="">
                    <h3>Nos biscuits</h3>
                </a>
                <div class="content">
                    <span>9.5 DT</span>
                    <a class="add-to-cart" href="./shopping cart.html">Ajouter au panier</a>
                </div>
            </div>
            <div class="rateus">
                <button style="width: 80%; font-weight: 450; margin-left: 130%;"><a href="./Products-Page-2.html">Plus de Produits</a></button>
            </div>
        </div>
    </section>
    <section class="customers" id="customers">
        <div class="heading">
            <h2>Avis de la clientèle :</h2>
        </div>
        <div class="customers-container">
            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>La première fois que j'ai essayé le café de "KYUFI - كيوفي", je suis instantanément tombé amoureux de son goût mais aussi de sopn prix! Je suis un client fidèle et je vous mens pas, cette marque ne cesse point de m'impressionner .</p>
                <h2>andreas christensen</h2>
                <img src="images/rev4.jpg" alt="">
            </div>
            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
                <p>Un espace beinveillant que je recommande vivement. L'ambiance est vraiment chaude et sympathique et le service est très chaleureux et gentils</p>
                <h2>Riadh Ibrahim</h2>
                <img src="images/rev1.jpg" alt="">
            </div>
            <div id="rev3" class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>J'ai commandé un café depuis l'application mais ils m'ont appelé pour me dire que ca ne serait pas possible dû à un défaut du mixeur. Je m'attendais à plus de rpofessionalisme d'une marque aussi renommée</p>
                <h2>Emna Miraoui</h2>
                <img src="images/emna.jpg" alt="">
            </div>
            <div id="rev4" class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>la boutique de Quebec a le service le plus assidu et chaleureux. Je recommande d'y aller au moins une fois. Vous ne le regretterais pas</p>
                <h2>Marlin Dior</h2>
                <img src="images/rev3.jpg" alt="">
            </div>
        </div>
        <div class="rateus">
            <button><a href="rate.php">Laisser un avis</a></button>
        </div>
    </section>
    
    <section class="about" id="about">
        <div class="about-img">
            <img src="images/footer-bg.jpg" alt="">
        </div>
        <div class="about-text">
            <h2>Notre Histoire:</h2>
            <p>Notre histoire commence en 1971 le long des rues pavées du célèbre Pike Place Market de Seattle. C'est ici que Starbucks a ouvert son premier magasin, proposant à nos clients des grains de café fraîchement torréfiés, du thé et des épices du monde entier à emporter chez eux. Dix ans plus tard, un jeune New-Yorkais nommé Howard Schultz franchit ces portes et fut captivé par le café Starbucks dès sa première gorgée. Après avoir rejoint l'entreprise en 1982, une autre rue pavée le mènerait vers une autre découverte.</p>
            <h2>Café & Artisanat:</h2>
            <p> Il faut de nombreuses mains pour élaborer la tasse de café parfaite - des agriculteurs qui prennent soin des cerises de café mûres et rouges, aux maîtres torréfacteurs qui extraient le meilleur de chaque grain, et au barista qui le sert avec attention. Nous nous engageons à respecter les normes les plus élevées en matière de qualité et de service, en embrassant notre patrimoine tout en innovant pour créer de nouvelles expériences à savourer."</p>
            <a href="" class="btn">Plus de détails</a>
        </div>
    </section>
    <section class="footer">
        <div class="footer-box">
            <h2>Reseaux Sociaux :</h2>
            <p>Contactez-Nous :</p>
            <div class="social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-tiktok"></i></a>
            </div>
        </div>
        <div class="footer-box">
            <h3>Aide :</h3>
            <li><a href="">Produits</a></li>
            <li><a href="">Aide</a></li>
            <li><a href="">Conditions du retour</a></li>
            <li><a href="">Conditions d'utilisations </a></li>
        </div>
        <div class="footer-box">
            <h3>Les Guides :</h3>
            <li><a href="">Options</a></li>
            <li><a id="careers" href="http://localhost/web/">Embauche</a></li>
            <li><a href="">Blog Posts</a></li>
            <li><a href="">Les Branches</a></li>
        </div>
        <div class="footer-box">
            <h3>Contactez-nous :</h3>
            <div class="contact">
                <span><i class="fas fa-map-marker-alt"></i>250 New York City, USA 10001</span>
                <span><i class="fas fa-phone"></i>+1 444 744 8444</span>
                <span><i class="fas fa-envelope"></i>coffee@shop.com</span>
            </div>
        </div>
    </section>
    <div class="copyright">
        <p>&#169; RT2 G3 All Rights Reserved 2023</p>
    </div>	
</body>
<script src="traductionboutons.js"></script>
<script src="search.js"></script>
</html>
