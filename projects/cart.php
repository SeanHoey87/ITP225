<?php
session_start();
require 'connection.php'; // Database connection

$stmt = $conn->query("SELECT * FROM products");
$products = $stmt->fetchAll();

if (!isset($_SESSION['session_id'])) {
    $_SESSION['session_id'] = session_id();
}
$session_id = $_SESSION['session_id'];

$stmt = $conn->prepare("
    SELECT cart.id AS cart_id, products.name, products.price, cart.quantity 
    FROM cart 
    JOIN products ON cart.product_id = products.id 
    WHERE cart.session_id = ?
");
$stmt->execute([$session_id]);
$cart_items = $stmt->fetchAll();

// Calculate total price
$total_price = 0;
foreach ($cart_items as $item) {
    $total_price += $item['price'] * $item['quantity'];
}
// echo "Session ID: " . $_SESSION['session_id']; // Debug Line
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Your Shopping Cart</h1>
        <a href="index.php">🛍️ Continue Shopping</a>
    </header>

    <?php if (count($cart_items) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cart_items as $item): ?>
                    <tr>
                        <td><?= htmlspecialchars($item['name']); ?></td>
                        <td>$<?= number_format($item['price'], 2); ?></td>
                        <td><?= $item['quantity']; ?></td>
                        <td>$<?= number_format($item['price'] * $item['quantity'], 2); ?></td>
                        <td>
                            <form action="remove_from_cart.php" method="POST">
                                <input type="hidden" name="cart_id" value="<?= $item['cart_id']; ?>">
                                <button type="submit">Remove</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <h3>Total: $<?= number_format($total_price, 2); ?></h3>
        <a href="index.php">Continue Shopping</a>
    <?php else: ?>
        <p>Your cart is empty.</p>
        <a href="index.php">Go Back to Store</a>
    <?php endif; ?>
</body>
</html>
