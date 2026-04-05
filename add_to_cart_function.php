<?php
session_start();
include "isConnected.php";
include_once 'CartRepository.php';
include_once 'ProductRepository.php';
$cartrepo= new CartRepository();
$prodrepo= new ProductRepository();
$usercart = $cartrepo->findCartById($_COOKIE["user_id"]);

 if (isset($_GET['prodselected']) && isset($_COOKIE['user_id'])) {
  $product = $_GET['prodselected'];
  $cartinfo=array(
    'user_id'=>$_COOKIE["user_id"],
    'product_id'=>$product
  );
  $cartrepo->create($cartinfo);
  header("Location: ./Products-Page-2.php");
  exit;
}

?>