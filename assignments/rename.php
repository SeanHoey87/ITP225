<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="display.php" method="get">
        <label>First name: </label>
        <input type="text" name="first_name"/><br>
        <label>Last name: </label>
        <input type="text" name="last_name"/><br>
        <label>&nbsp;</label>
        <input type="submit" value="Submit"/>
    </form>
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