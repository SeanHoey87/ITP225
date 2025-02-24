<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <header>
        <h1>Your Shopping Cart</h1>
        <a href="index.php">🏠 Continue Shopping</a>
    </header>

    <table>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>Laptop</td>
            <td>$500.00</td>
            <td>1</td>
            <td>
                <form action="remove_from_cart.php" method="POST">
                    <input type="hidden" name="cart_id" value="1">
                    <button type="submit">Remove</button>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>
