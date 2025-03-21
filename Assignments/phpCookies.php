<?php
$cookie_name = "ITP225_Sean_Hoey";
$cookie_value = "Pizza"; 
$expire_time = time() + 3600; 
$path = "/";

if (!isset($_COOKIE[$cookie_name])) {
    setcookie($cookie_name, $cookie_value, $expire_time, $path);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['modify'])) {
        // Modify
        $new_value = "Burger";
        setcookie($cookie_name, $new_value, $expire_time, $path);
        echo "Cookie '$cookie_name' modified to: $new_value<br>";
    }
    
    if (isset($_POST['delete'])) {
        // Delete
        setcookie($cookie_name, "", time() - 3600, $path);
        echo "Cookie '$cookie_name' deleted.<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cookie Example</title>
</head>
<body>

<h2>PHP Cookie Example</h2>

<?php

if (isset($_COOKIE[$cookie_name])) {
    echo "Current Cookie Value: " . $_COOKIE[$cookie_name] . "<br>";
} else {
    echo "Cookie is not set or has been deleted.<br>";
}
?>

<form method="post">
    <button type="submit" name="modify">Modify Cookie</button>
    <button type="submit" name="delete">Delete Cookie</button>
</form>

</body>
</html>