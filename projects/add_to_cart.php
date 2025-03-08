<?php
session_start();
require 'config.php'; // Connect to the database

// Ensure session ID exists
if (!isset($_SESSION['session_id'])) {
    $_SESSION['session_id'] = session_id();
}
$session_id = $_SESSION['session_id'];

if (isset($_POST['product_id'])) {
    $product_id = intval($_POST['product_id']);

    // Check if the product exists
    $stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$product_id]);
    $product = $stmt->fetch();

    if ($product) {
        // Check if item is already in the cart
        $stmt = $conn->prepare("SELECT * FROM cart WHERE session_id = ? AND product_id = ?");
        $stmt->execute([$session_id, $product_id]);
        $cart_item = $stmt->fetch();

        if ($cart_item) {
            // If item exists, update quantity
            $stmt = $conn->prepare("UPDATE cart SET quantity = quantity + 1 WHERE session_id = ? AND product_id = ?");
            $stmt->execute([$session_id, $product_id]);
        } else {
            // If item doesn't exist, insert a new record
            $stmt = $conn->prepare("INSERT INTO cart (session_id, product_id, quantity) VALUES (?, ?, 1)");
            $stmt->execute([$session_id, $product_id]);
        }
    }
}

// Redirect back to the store
header("Location: cart.php");
exit();
?>
