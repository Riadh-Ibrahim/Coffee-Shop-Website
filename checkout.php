<?php 
session_start();
include "isConnected.php"; 

include_once './CommandeRepo.php';
include_once './CartRepository.php';
include_once './UserRepository.php';
include_once './ProductRepository.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (!isset($_COOKIE["user_id"])) {
    header("Location: ./login.php");
    exit;
}

$cartrepo = new CartRepository();
$userrepo = new UserRepository();
$productrepo = new ProductRepository();
$usermail = $userrepo->findUserEmailById($_COOKIE["user_id"]);
$commanrepo = new CommandeRepository();


if (!isset($_POST['checkoutsubmit'])) {
    header("Location: ./commander.php");
    exit;
}

$name = trim($_POST['name'] ?? '');
$address = trim($_POST['address'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$description = trim($_POST['description'] ?? '');

$cartItems = $cartrepo->findCartById($_COOKIE["user_id"]);
if (empty($cartItems)) {
    header("Location: ./commander.php");
    exit;
}

$delivery = 4.95;
$userPoints = floatval($userrepo->findUserPointsById($_COOKIE["user_id"]) ?? 0);
$total = 0;
$quantities = [];
foreach ($cartItems as $productId) {
    $quantities[$productId] = ($quantities[$productId] ?? 0) + 1;
    $product = $productrepo->findProductById($productId);
    if ($product) {
        $total += floatval($product['product_price']);
    }
}

$price = $total + $delivery - ($userPoints * 0.05);
$price = max(0, round($price, 2));
$discount = round($userPoints * 0.05, 2);

$orderItems = [];
foreach ($quantities as $productId => $qty) {
    $product = $productrepo->findProductById($productId);
    if ($product) {
        $orderItems[] = [
            'name' => $product['product_name'],
            'price' => $product['product_price'],
            'quantity' => $qty,
        ];
    }
}

$cartrepo->delete($_COOKIE["user_id"]);

$commandeinfo = [
    'users_id' => $_COOKIE["user_id"],
    'commande_date' => date("Y-m-d"),
    'price' => $price,
];
$commanrepo->create($commandeinfo);

$_SESSION['order_confirm'] = [
    'name' => $name,
    'phone' => $phone,
    'address' => $address,
    'description' => $description,
    'delivery' => round($delivery, 2),
    'discount' => $discount,
    'price' => $price,
    'items' => $orderItems,
];

$subject = 'KYUFI ORDER';
$orderLines = [];
foreach ($orderItems as $item) {
    $orderLines[] = "- {$item['name']} x{$item['quantity']} @ {$item['price']} DT";
}
$orderLinesText = implode("\n", $orderLines);
$body = nl2br("Hello dear customer,\n\nYou have now placed your order. A few minutes and it will be there.\n\nOrder details:\nName: $name\nPhone number: $phone\nAddress: $address\nDescription: $description\n\nItems:\n$orderLinesText\n\nFinal total: $price DT\n\nThank you for choosing KYUFI.");

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Host = "smtp.gmail.com";
$mail->Username = "kyuficoffeeshop@gmail.com";
$mail->Password = "ragzbryuyxtbxegc";
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom("kyuficoffeeshop@gmail.com", 'KYUFI Coffee Shop');
$mail->addAddress($usermail);
$mail->Subject = $subject;
$mail->Body = $body;
try {
    $mail->send();
} catch (Exception $e) {
    // Email failure should not block the confirmation page.
}

header("Location: ./thank_you.php");
exit;


?>
