<?php
require 'CnxDB.php';

$Username=htmlentities($_POST['name']);
$Pass=htmlentities($_POST['loginPassword']);

$usernameErr=$passwordErr='';

 function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])||empty($_POST["loginPassword"])) {
    echo "<script> alert ('All fields must contain info');</script>";
    header("Location: ./account.php");
    
    }
    
    else {
      $username = test_input($_POST["name"]);
      
      $password = test_input($_POST["loginPassword"]);

    }
   }




if ($passwordErr == $usernameErr){
$cnxPDO = CnxDB::getInstance();

$user_id = $_COOKIE['user_id'];


$stmt = $cnxPDO->prepare("UPDATE users SET users_uid = :Username, users_pwd=:Pass WHERE users_id = :user_id");
$stmt->bindParam(':Username', $Username);
$stmt->bindParam(':Pass', $Pass);
$stmt->bindParam(':user_id', $user_id);
$stmt->execute();
header("Location: ./account.php");
}


?>
