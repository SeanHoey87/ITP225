<?php
// Database connection
$pdo = new PDO('mysql:host=127.0.0.1;dbname=hw7db', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = preg_replace("/[^a-zA-Z0-9_]/", "", $_POST['username']);
    $password = preg_replace("/[^a-zA-Z0-9_]/", "", $_POST['password']);

    $stmt = $pdo->prepare('SELECT * FROM hw7 WHERE hw7_username = ?');
    $stmt->execute([$username]);
    $user = $stmt->fetch();
    // echo "Stored Hash: " . $user['hw7_hashcode'] . "<br>";
    // echo "Entered Password: " . $password . "<br>";
    // Check password
    if ($user && password_verify($password, $user['hw7_hashcode'])) {
        $message = "<p style='color: green;'>Login successful! Welcome, $username.</p>";
    } else {
        $message = "<p style='color: red;'>Invalid username or password.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <div class="form-container">
        <h2>Login</h2>
        <form action="" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>

        <?php if (isset($message)) echo $message; ?>

    </div>
</body>
</html>
