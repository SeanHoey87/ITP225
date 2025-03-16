<?php
session_start();
require 'connection.php'; // Database connection

if (isset($_POST['cart_id'])) {
    $cart_id = intval($_POST['cart_id']);

    // removes item from the cart
    $stmt = $conn->prepare("DELETE FROM cart WHERE id = ?");
    $stmt->execute([$cart_id]);
}

// Redirect back to cart page
header("Location: cart.php");
exit();
?>
