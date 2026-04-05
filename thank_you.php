<?php
session_start();

if (empty($_SESSION['order_confirm'])) {
    header('Location: ./home.php');
    exit;
}

$order = $_SESSION['order_confirm'];
$orderItems = $order['items'] ?? [];
$price = number_format((float)($order['price'] ?? 0), 2);

// Clear order data after display.
unset($_SESSION['order_confirm']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Your Order</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f7f5f0; color: #333; margin: 0; padding: 0; }
        .container { max-width: 760px; margin: 40px auto; padding: 24px; background: #fff; border-radius: 12px; box-shadow: 0 12px 30px rgba(0,0,0,0.08); }
        .hero { text-align: center; }
        .hero h1 { margin: 0 0 10px; font-size: 2.4rem; color: #4a2f17; }
        .hero p { margin: 0 0 20px; color: #555; }
        .details { margin-top: 24px; }
        .details h2 { font-size: 1.2rem; margin-bottom: 10px; color: #4a2f17; }
        .details p { margin: 6px 0; }
        .order-items { width: 100%; border-collapse: collapse; margin-top: 18px; }
        .order-items th, .order-items td { padding: 12px 10px; border-bottom: 1px solid #eee; text-align: left; }
        .order-items th { color: #4a2f17; font-weight: 600; }
        .total { margin-top: 16px; padding: 16px; background: #fff6e6; border: 1px solid #ffe1b8; border-radius: 8px; }
        .actions { margin-top: 24px; text-align: center; }
        .actions a { text-decoration: none; color: #fff; background: #4a2f17; padding: 12px 24px; border-radius: 8px; display: inline-block; }
    </style>
</head>
<body>
    <div class="container">
        <div class="hero">
            <h1>Thank You!</h1>
            <p>Your order has been received and is being processed.</p>
        </div>
        <div class="details">
            <h2>Order Summary</h2>
            <p><strong>Name:</strong> <?php echo htmlspecialchars($order['name'] ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?></p>
            <p><strong>Phone:</strong> <?php echo htmlspecialchars($order['phone'] ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?></p>
            <p><strong>Address:</strong> <?php echo htmlspecialchars($order['address'] ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?></p>
            <p><strong>Description:</strong> <?php echo htmlspecialchars($order['description'] ?? 'No special instructions', ENT_QUOTES, 'UTF-8'); ?></p>
            <p><strong>Delivery:</strong> <?php echo htmlspecialchars(number_format((float)($order['delivery'] ?? 0), 2), ENT_QUOTES, 'UTF-8'); ?> DT</p>
            <p><strong>Points discount:</strong> <?php echo htmlspecialchars(number_format((float)($order['discount'] ?? 0), 2), ENT_QUOTES, 'UTF-8'); ?> DT</p>
            <table class="order-items">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Qty</th>
                        <th>Price Each</th>
                    </tr>
                </thead>
                <tbody>
                <?php if (empty($orderItems)): ?>
                    <tr><td colspan="3">No items found for this order.</td></tr>
                <?php else: ?>
                    <?php foreach ($orderItems as $item): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($item['name'] ?? 'Unknown', ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo intval($item['quantity'] ?? 0); ?></td>
                            <td><?php echo htmlspecialchars(number_format((float)($item['price'] ?? 0), 2), ENT_QUOTES, 'UTF-8'); ?> DT</td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
                </tbody>
            </table>
            <div class="total">
                <strong>Final Total:</strong> <?php echo $price; ?> DT
            </div>
        </div>
        <div class="actions">
            <a href="./home.php">Back to Home</a>
        </div>
    </div>
</body>
</html>
