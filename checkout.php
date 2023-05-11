<?php 
session_start();
include "isConnected.php"; 

include_once './CommandeRepo.php';
include_once './CartRepository.php';
include_once './UserRepository.php';
$userrepo=new UserRepository();
$usermail=$userrepo->findUserEmailById($_COOKIE["user_id"]);
$commanrepo= new CommandeRepository();
$cartrepo = new CartRepository();
$price=$_COOKIE['totalfinal'];
$cartrepo->delete($_COOKIE["user_id"]);
$commandeinfo=array(
    'users_id'=>$_COOKIE["user_id"],
    'commande_date'=>date("Y-m-d"),
    'price'=>$price
    );
$commanrepo->create($commandeinfo);



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';




 if (!empty($_POST['name']) && !empty($_POST['address']) && !empty($_POST['phone']) && !empty($_POST['description'])) {
    $name = $_POST['name'];
    $address = 'wassimkhalifa02@gmail.com';//$_POST['address'];
    $phone = $_POST['phone'];
    $description = $_POST['description'];
    $checkoutsubmit = $_POST['checkoutsubmit'];
}

if (isset($checkoutsubmit)) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $description = $_POST['description'];
    $fromEmail = 'kyuficoffeeshop@gmail.com';
    $subject = 'KYUFI ORDER';


    $body=nl2br("Hello dear customer, You have now passed your order. A few minutes and it will be there. And here are your Order details : Name: $name . Phone number: $phone. Order description: $description. Thank you for choosing KYUFI .");


    $mail = new PHPMailer(true);
    
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    
    $mail->Host = "smtp.gmail.com";

    $mail->SMTPAuth = true;
    
    $mail->Username = "kyuficoffeeshop@gmail.com";
    $mail->Password ="ragzbryuyxtbxegc";
    
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom("kyuficoffeeshop@gmail.com");
    $mail->addAddress($usermail);
    
    $mail->Subject = $subject;
    $mail->Body = $body;
    try {
        $mail->send();
        echo "<script>alert('Email sent successfully !')</script>";
        echo "<script>window.location.href='./home.php';</script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}
header("Location: ./home.php");
//http://localhost:3306/coffee-shop-website-wassim-khelifa-patch-1
exit;


?>
