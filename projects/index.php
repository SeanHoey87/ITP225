<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - Storefront</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Online Store</h1>
        <a href="cart.php" class="cart-link">🛒 View Cart</a>
    </header>

    <section class="products">
        <!-- Example Product -->
        <div class="product">
            <img src="images/laptop.jpg" alt="Laptop">
            <h2>Laptop</h2>
            <p>$500.00</p>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_id" value="1">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <div class="product">
            <img src="images/smartphone.jpg" alt="Smartphone">
            <h2>Smartphone</h2>
            <p>$299.99</p>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_id" value="2">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

        <!-- Add more products here -->
    </section>
</body>
</html>
