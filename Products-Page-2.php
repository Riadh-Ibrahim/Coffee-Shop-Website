<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Coffees</title>
    <link rel="stylesheet" href="./styles/styles4.css">
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

    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb mb-30">
                    <ol class="breadcrumb">
                        <li id="home" class="breadcrumb-item">
                            <a href="./home.php">Home</a>
                        </li>
                        <li id="home" class="breadcrumb-item">
                            <a href="./Products-Page-2.php">Products</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Coffee</li>
                      </ol>
                </nav>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-3 col-md-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Filter by Type :   </span></h5>
                <div class="bg-light p-4 mb-30">
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="price-all">
                            <label class="custom-control-label" for="price-all">Everything</label>
                            <span ></span>

                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-1">
                            <label class="custom-control-label" for="price-1">Coffee</label>
                            <span ></span>

                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-1">
                            <label class="custom-control-label" for="price-1">Tea</label>
                            <span ></span>

                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-1">
                            <label class="custom-control-label" for="price-1">Juice</label>
                            <span ></span>

                        </div>

                    </form>
                </div>
                
                <br>
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Hot OR Cold :</span></h5>
                <div class="bg-light p-4 mb-30">
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="color-all">
                            <label class="custom-control-label" for="price-all">Everything</label>
                            <span ></span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-1">
                            <label class="custom-control-label" for="color-1">Hot Drinks</label>
                            <span ></span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-1">
                            <label class="custom-control-label" for="color-1">Cold Drinks</label>
                            <span ></span>
                        </div>


                    </form>
                </div>

                <br>
            </div>

            <div class="col-lg-9 col-md-8">
                <div class="row pb-3">
                    <div class="col-12">
                        <nav>
                          <ul class="pagination justify-content-center" >
                            <li class="page-item active"><a class="page-link" style="width:200px" href="Products-Page-2.php">Coffee</a></li>
                            <li class="page-item"><a id="next" class="page-link" style="width: 200px;" href="Products-Page-1.php">Cakes and Cookies</a></li>

                          </ul>
                        </nav>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="images/Iced-coffee.jpg" alt="">
                                <div class="product-action">
                                    <a class="btn btn-outline-dark btn-square" href="Iced-Coffee.php"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="Iced-Coffee.php">Iced Coffee</a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$2.99</h5><h6 class="text-muted ml-2"><del>$4.99</del></h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star-half-alt text-warning mr-1"></small>
                                    <small>(78)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="images/Frappu.jpg" alt="">
                                <div class="product-action">
                                    <a class="btn btn-outline-dark btn-square" href="Frappucino.php"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                              
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="Frappucino.php">Frappucino</a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$1.99</h5><h6 class="text-muted ml-2"><del>$2.99</del></h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star-half-alt text-warning mr-1"></small>
                                    <small>(93)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="images/Caramel-co.jpg" href="" alt="">
                                <div class="product-action" >
                                    <a class="btn btn-outline-dark btn-square" href="Caramel-Coffee.php"><i  class="fa fa-shopping-cart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="Caramel-Coffee.php">Caramel Coffee</a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$2.99</h5><h6 class="text-muted ml-2"><del>$4.99</del></h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star-half-alt text-warning mr-1"></small>
                                    <small class="far fa-star text-warning mr-1"></small>
                                    <small>(116)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="images/Arabica.jpg" alt="">
                                <div class="product-action">
                                    <a class="btn btn-outline-dark btn-square" href="Coffea-arabica.php"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="Coffea-arabica.php">Coffea Arabica</a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$2.49</h5><h6 class="text-muted ml-2"><del>$5.99</del></h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="far fa-star text-warning mr-1"></small>
                                    <small class="far fa-star text-warning mr-1"></small>
                                    <small>(205)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="images/Strawberry-juice.jpg" alt="">
                                <div class="product-action">
                                    <a class="btn btn-outline-dark btn-square" href="Strawberry-juice.php"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="Strawberry-juice.php">Strawberry juice</a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$2.99</h5><h6 class="text-muted ml-2"><del>$3.99</del></h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small>(102)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="images/Americano.jpg" alt="">
                                <div class="product-action">
                                    <a class="btn btn-outline-dark btn-square" href="Americano.php"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="Americano.php">Americano</a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$5.50</h5><h6 class="text-muted ml-2"><del>$5.99</del></h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star-half-alt text-warning mr-1"></small>
                                    <small>(99)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="images/Espresso.jpg" alt="">
                                <div class="product-action">
                                    <a class="btn btn-outline-dark btn-square" href="Espresso.php"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="Espresso.php">Espresso</a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$2.99</h5><h6 class="text-muted ml-2"><del>$3.99</del></h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star-half-alt text-warning mr-1"></small>
                                    <small class="far fa-star text-warning mr-1"></small>
                                    <small>(71)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="images/Mango.jpg" alt="">
                                <div class="product-action">
                                    <a class="btn btn-outline-dark btn-square" href="Mango-Juice.php"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="Mango-Juice.php">Mango Juice</a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$2.99</h5><h6 class="text-muted ml-2"><del>$3.99</del></h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="far fa-star text-warning mr-1"></small>
                                    <small class="far fa-star text-warning mr-1"></small>
                                    <small>(51)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="images/T.jpg" alt="">
                                <div class="product-action">
                                    <a class="btn btn-outline-dark btn-square" href="Hot-Tea.php"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="Hot-Tea.php">Hot Tea</a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$1.99</h5><h6 class="text-muted ml-2"><del>$2.99</del></h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="fa fa-star text-warning mr-1"></small>
                                    <small class="far fa-star text-warning mr-1"></small>
                                    <small class="far fa-star text-warning mr-1"></small>
                                    <small>(99)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>



</body>
</html>