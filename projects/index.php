<?php
require 'connection.php'; // Database connection

$stmt = $conn->query("SELECT * FROM products");
$products = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - Storefront</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Online Store</h1>
        <a href="cart.php" class="cart-link">🛒 View Cart</a>
    </header>
    <h1>Online Store</h1>
    <div class="products">
        <?php foreach ($products as $product) : ?>
            <div class="product">
                <img src="<?= $product['image']; ?>" alt="<?= $product['name']; ?>" width="150">
                <h3><?= $product['name']; ?></h3>
                <p>$<?= number_format($product['price'], 2); ?></p>
                <form action="add_to_cart.php" method="POST">
                    <input type="hidden" name="product_id" value="<?= $product['id']; ?>">
                    <button type="submit">Add to Cart</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
