<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_GET['first_name']) && isset($_GET['last_name'])) {
            echo "First Name: " . htmlspecialchars($_GET['first_name']) . "<br>";
            echo "Last Name: " . htmlspecialchars($_GET['last_name']);
        } else {
            echo "No data received.";
        }
    ?>
</body>
</html>