<?php
session_start();
include_once './isConnected.php';

include_once './CartRepository.php';

$cartrepo = new CartRepository();
if(isset($_COOKIE["user_id"])&&($cartrepo->findNProductsById(intval($_COOKIE["user_id"]))>0)){

$nproducts = $cartrepo->findNProductsById(intval($_COOKIE["user_id"]));
} else {
    $nproducts=0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  
<link rel="stylesheet" href="./styles/joinus.css">
<link rel="stylesheet" href="./styles/home.css">
<style>
.error {color: #FF0000;}

</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <?php $passwordErr=$nameErr = $emailErr = $genderErr = $phonenumberErr= $ageErr=""; 
 $firstname = $email = $gender =$password= $phonenumber=$age= "";


 //check the format of the data

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
      if (empty($_POST["phonenumber"])) {
        $phonenumberErr = "Phone Number is required";
      } else {
        $phonenumber = test_input($_POST["phonenumber"]);
        // check if name only contains digits
      if (!preg_match("/^[0-9]+$/",$phonenumber)) {
        $phonenumberErr = "Only numbers are allowed";
      }
       }
        }

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["age"])) {
          $ageErr = "Age is required";
        } else {
          $age = test_input($_POST["age"]);
          // check if name only contains digits
        if (!preg_match("/^[0-9]+$/",$age)) {
          $ageErr = "Only numbers are allowed";
        }
         }
          }


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Pass"])) {
    $passwordErr = "password is required";
  } else {
    $password = test_input($_POST["loginPassword"]);
    // check if password coontains more than 8 characters
    if (strlen ($password < 8)) {
       $passwordErr = "Password must contain at least 8 characters";
    }
     }
      }
 
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }


  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

}

 //php code concerning file uploads

 if (isset($_POST['submit'])) {
  $target_dir = "uploads/"; // The directory where the uploaded file will be stored
  $target_name= $_FILES['fileToUpload']['name'];
  $target_file = $target_dir . $target_name;
  $file_tmp = $_FILES['fileToUpload']['tmp_name'];
  $uploadOk = 1;
  $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 // check if the file is a the right form 
  if($FileType != "pdf" ){
    echo "Sorry, only PDF files are allowed.";
    $uploadOk = 0;
 }
  else {
    move_uploaded_file($file_tmp, $target_file);
    $uploadOk=1;
 }

 // check if the size of the file doesn not surpass the limit
 if ($_FILES["fileToUpload"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
 }}

 ?>


  <div class="login">
    <h1 class="animate__animated animate__bounce" >Join us</h1>
   
   <form method="post" action="AddEmployee.php" enctype="multipart/form-data">
   
    <p><span class="error">* Required Field</span></p>
  
     <label class="form-label"> <b> * Username  : </b></label> <br>
      <input class="form-control" type="text" name="Username" id="Username"  required >
      <span class="error"><?php echo $nameErr;?></span>
     <br>
    
     <label class="form-label"> <b> * Password : </b></label> <br>
      <input class="form-control" type="password" name="Pass" id="loginPassword"  required >
      <br>
      <input type="checkbox" id="show-password" > Show password
     <span class="error"> <?php echo $passwordErr;?></span> 
      <br>

     <label class="form-label"> <b> * Phone number </b></label> <br>
      <input class="form-control" type="text" name="Phonenumber" id="Phonenumber" required >
     <span class="error"><?php echo $phonenumberErr;?></span>
     <br>
    
     <label class="form-label"> <b> Age : </b></label>  <br>
      <input class="form-control" type="text" name="Age" id="Age"  >
     <span class="error"> <?php echo $ageErr ?> </span>
     <br>
    
     <label class="form-label"> <b> * Email :  </b></label> <br>
      <input class="form-control" type="text" name="email" id="email" required >
     <span class="error"> <?php echo $emailErr;?></span>
      <br>
    
     <label class="form-label"><b> * Gender : </b> </label> <br>
      <input type="radio" name="gender" required id ="gender"
     <?php if (isset($gender) && $gender=="female") echo "checked";?>
     value="female"> Female 
     <input type="radio" name="gender"
     <?php if (isset($gender) && $gender=="male") echo "checked";?>
     value="male"> Male
    
     <span class="error"> <?php echo $genderErr;?></span>
     <br>
    
     <label class="form-label"> <b>* Position : </b></label> <br>
     <select id="positions"  name="position" id="position" required>
      <option value="Delivery">Delivery</option>
      <option value="Coffee">Coffee brewer</option>
      <option value="Waiter">Waiter</option>
      <option value="Cleaning">Cleaning staff</option>
     </select> 
     <br> 
    
     <label class="form-label"><b>* Your CV:</b> </label> <br>
     <input type="file" name="fileToUpload" id="fileToUpload" accept="application/pdf" value="attach your file"> 
     <br>
    
     <input type="submit" name="envoi" value="Submit" >

   
  
  </form>
  <br>
</div>
<script src="./show.js"></script>
<script src="./joiuns.js"></script>
</body>
</html>
