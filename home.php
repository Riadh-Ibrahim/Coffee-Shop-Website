
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop</title>
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
    <section class="home">
        <div class="home-text">
            <h1>Start <br> your day <br> with a <br> coffee</h1>
            <br>
            <p> <b> Today's good mood is sponsored by our coffee.</b></p>
            <br>
            <a href="./Products-Page-2.php" class="btn" id="fbtn">Shop now</a>
            <a href="" class="btn">Find nearest store</a>
        </div>

        <div class="product-list">
            <div class="product">
                <a href="./Frappucino.php" class="product-link">
                  <img src="./images/img1.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Frappuccino</b></p>
                    <h3 class="product-price">8 DT</h3>
                  </div>
                </a>    
            </div>
            <hr style="color: aliceblue;">

            <div class="product">
                <a href="./Caramel-Coffee.php" class="product-link">
                  <img src="./images/img2.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Caramel Coffee</b></p>
                    <h3 class="product-price">7.5 DT</h3>
                  </div>
                </a>    
            </div>
            <hr style="color: aliceblue;">

            <div class="product">
                <a href="./Iced-Coffee.php" class="product-link">
                  <img src="./images/img3.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Iced Coffee</b></p>
                    <h3 class="product-price">6 DT</h3>
                  </div>
                </a>    
            </div>
            <hr style="color: aliceblue;">

            <div class="product">
                <a href="./Strawberry-juice.php" class="product-link">
                  <img src="./images/img4.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Strawberry Juice</b></p>
                    <h3 class="product-price">12 DT</h3>
                  </div>
                </a>    
            </div>
            <hr style="color: aliceblue;">

            <div class="product">
                <a href="./Coffea-arabica.php" class="product-link">
                  <img src="./images/Arabica.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Coffee Arabica</b></p>
                    <h3 class="product-price">5.99 DT</h3>
                  </div>
                </a>    
            </div>
            <hr style="color: aliceblue;">

            <div class="product">
                <a href="./Americano.php" class="product-link">
                  <img src="./images/Americano.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Americano</b></p>
                    <h3 class="product-price">4.99 DT</h3>
                  </div>
                </a>    
            </div>
            <hr style="color: aliceblue;">

            <div class="product">
                <a href="./Espresso.php" class="product-link">
                  <img src="./images/Espresso.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Espresso</b></p>
                    <h3 class="product-price">3.99 DT</h3>
                  </div>
                </a>    
            </div>
            <hr style="color: aliceblue;">

            <div class="product">
                <a href="./mango-Juice.php" class="product-link">
                  <img src="./images/Mango.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Mango Juice</b></p>
                    <h3 class="product-price">12 DT</h3>
                  </div>
                </a>    
            </div>
            <hr style="color: aliceblue;">

            <div class="product">
                <a href="./Hot-Tea.php" class="product-link">
                  <img src="./images/T.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Hot Tea</b></p>
                    <h3 class="product-price">4.5 DT</h3>
                  </div>
                </a>    
            </div>
            <hr style="color: aliceblue;">

            <div class="product">
                <a href="./German-cake.php" class="product-link">
                  <img src="./images/img5.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>German Cake</b></p>
                    <h3 class="product-price">19.99 DT</h3>
                  </div>
                </a>    
            </div>
            <hr style="color: aliceblue;">

            <div class="product">
                <a href="./Chocolate-Donuts.php" class="product-link">
                  <img src="./images/img6.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Chocolate Donuts</b></p>
                    <h3 class="product-price">4.99 DT</h3>
                  </div>
                </a>    
            </div>
            <hr style="color: aliceblue;">

            <div class="product">
                <a href="./Chocolate-cake.php" class="product-link">
                  <img src="./images/img7.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Chocolate Cake</b></p>
                    <h3 class="product-price">3.99 DT</h3>
                  </div>
                </a>    
            </div>
            <hr style="color: aliceblue;">
            
            <div class="product">
                <a href="./Our-cookies.php" class="product-link">
                  <img src="./images/img8.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Our Cookies</b></p>
                    <h3 class="product-price">9.5 DT</h3>
                  </div>
                </a>
            </div>
            <hr style="color: aliceblue;">
            
            <div class="product">
                <a href="./red-velvet.php" class="product-link">
                  <img src="./images/red-velvet.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Red Velvet</b></p>
                    <h3 class="product-price">5.5 DT</h3>
                  </div>
                </a>
            </div>
            <hr style="color: aliceblue;">
            
            <div class="product">
                <a href="./cupcakes.php" class="product-link">
                  <img src="./images/CUpcakes.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Cupcakes</b></p>
                    <h3 class="product-price">6.99 DT</h3>
                  </div>
                </a>
            </div>
            <hr style="color: aliceblue;">
            
            <div class="product">
                <a href="./Black-forest.php" class="product-link">
                  <img src="./images/Black-forest.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Black Forest Cake</b></p>
                    <h3 class="product-price"> 22.99 DT</h3>
                  </div>
                </a>
            </div>
            <hr style="color: aliceblue;">
            
            <div class="product">
                <a href="./Genoise-sponge.php" class="product-link">
                  <img src="./images/Genoise-sponge.jpg" alt="" class="product-image">
                  <div class="product-details">
                    <p class="product-name"><b>Genoise Sponge</b></p>
                    <h3 class="product-price">17.99 DT</h3>
                  </div>
                </a>
            </div>
            <hr style="color: aliceblue;">
            
            <div class="product">
                <a href="./pancakes.php" class="product-link">
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
            <h2>Our popular products :</h2>
        </div>
        <div class="products-container">
            <div class="box">
                <a href="./Frappucino.php"><img src="images/img1.jpg" alt="">
                    <h3>Frappuccino</h3>
                </a>
                <div class="content">
                    <span>8 DT</span>
                    <a class="add-to-cart" href="#">Add to cart</a>
                </div>
            </div>

            <div class="box">
                <a href="./Caramel-Coffee.php"><img src="images/img2.jpg" alt="">
                    <h3>Caramel coffee</h3>
                </a>
                <div class="content">
                    <span>7.5 DT</span>
                    <a class="add-to-cart" href="./shopping cart.php">Add to cart</a>
                </div>
            </div>

            <div class="box">
                <a href="./Iced-Coffee.php"><img src="images/img3.jpg" alt="">
                    <h3>Iced coffee</h3>
                </a>
                <div class="content">
                    <span>6 DT</span>
                    <a class="add-to-cart" href="./shopping cart.php">Add to cart</a>
                </div>
            </div>
            
            <div class="box">
                <a href="./Strawberry-juice.php"><img src="images/img4.jpg" alt="">
                    <h3>Strawberry juice</h3>
                </a>
                <div class="content">
                    <span>12 DT</span>
                    <a class="add-to-cart" href="./shopping cart.php">Add to cart</a>
                </div>
            </div>
            <div class="box">
                <a class="add-to-cart" href="./German-cake.php"><img src="images/img5.jpg" alt="">
                    <h3>German cake</h3>
                </a>
                <div class="content">
                    <span>19.99 DT</span>
                    <a class="add-to-cart" href="./shopping cart.php">Add to cart</a>
                </div>
            </div>
            <div class="box">
                <a href="./Chocolate-Donuts.php"><img src="images/img6.jpg" alt="">
                    <h3>Chocolate donuts</h3>
                </a>
                <div class="content">
                    <span>4.99 DT</span>
                    <a class="add-to-cart" href="./shopping cart.php">Add to cart</a>
                </div>
            </div>
            <div class="box">
                <a href="./Chocolate-cake.php"><img src="images/img7.jpg" alt="">
                    <h3>Chocolate cake</h3>
                </a>
                <div class="content">
                    <span>3.99 DT</span>
                    <a class="add-to-cart" href="./shopping cart.php">Add to cart</a>
                </div>
            </div>
            <div class="box">
                <a href="./Our-cookies.php"><img src="images/img8.jpg" alt="">
                    <h3>Our cookies</h3>
                </a>
                <div class="content">
                    <span>9.5 DT</span>
                    <a class="add-to-cart" href="./shopping cart.php">Add to cart</a>
                </div>
            </div>
            <div class="rateus">
                <button style="width: 80%; font-weight: 450; margin-left: 160%;"><a href="./Products-Page-2.php">View More Products</a></button>
            </div>
        </div>
    </section>
    <section class="customers" id="customers">
        <div class="heading">
            <h2>Our customer's review :</h2>
        </div>
        <div class="customers-container">
            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>I have been going to this store regularly for years. The last year has been almost daily. It is a very busy store but they move us through quickly. It seems like the employees all get along and do their jobs efficiently and curiously. Keep going "KYUFI - كيوفي".</p>
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
                <p>A Place to Be. The space I chose was Starbucks. Never in my life would I have imagined that I would be interested in writing a paper about this. I am currently traveling and it has been a place that I have been frequently visiting to sit down and take care of my studies.</p>
                <h2>Leo Messi</h2>
                <img src="images/rev1.jpg" alt="">
            </div>
            <div id="rev3" class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>I had purchased a drink on my app at an airport. I went to pick it up and they said they could not make my drink because the blender was broken down and could not refund my money. They said there's a phone number on the app and the phone number goes to the store.</p>
                <h2>CR7</h2>
                <img src="images/rev2.jpg" alt="">
            </div>
            <div id="rev4" class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>The KYUFI on Newman, Lasalle, Quebec has the best customer service anywhere. I go by there every other day before noon to get a coffee or a sandwich and the person at the window is such a delight to deal with along with all other employees. They always have a great attitude.</p>
                <h2>Marlin Dior</h2>
                <img src="images/rev3.jpg" alt="">
            </div>
        </div>
        <div class="rateus">
            <button><a href="rate.php">Rate Us</a></button>
        </div>
    </section>
    
    <section class="about" id="about">
        <div class="about-img">
            <img src="images/footer-bg.jpg" alt="">
        </div>
        <div class="about-text">
            <h2>Our history :</h2>
            <p>Our story begins in 1971 along the cobblestone streets of Seattle's historic Pike Place Market. It was here where Starbucks opened its first store, offering fresh-roasted coffee beans, tea and spices from around the world for our customers to take home. Ten years later, a young New Yorker named Howard Schultz would walk through these doors and become captivated with Starbucks coffee from his first sip. After joining the company in 1982, a different cobblestone road would lead him to another discovery.</p>
            <h2>Coffee & Craft :</h2>
            <p>It takes many hands to craft the perfect cup of coffee - from the farmers who tend to the red-ripe coffee cherries, to the master roasters who coax the best from every bean, and to the barista who serves it with care. We are committed to the highest standards of quality and service, embracing our heritage while innovating to create new experiences to savor.</p>
            <a href="" class="btn">Learn More</a>
        </div>
    </section>
    <section class="footer">
        <div class="footer-box">
            <h2>Social Media :</h2>
            <p>You can find us here :</p>
            <div class="social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-tiktok"></i></a>
            </div>
        </div>
        <div class="footer-box">
            <h3>Support :</h3>
            <li><a href="">Products</a></li>
            <li><a href="rate.php">Help & Support</a></li>
            <li><a href="">Return Policy</a></li>
            <li><a href="">Terms of use</a></li>
        </div>
        <div class="footer-box">
            <h3>View Guides :</h3>
            <li><a href="">Features</a></li>
            <li><a id="careers" href="">Careers</a></li>
            <li><a href="">Blog Posts</a></li>
            <li><a href="">Our Branches</a></li>
        </div>
        <div class="footer-box">
            <h3>Contact Us :</h3>
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
<script src="search.js"></script>
</html>
