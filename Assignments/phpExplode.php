
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Favorite Foods</title>
</head>
<body>
    <?php
    $foods_string = "Pizza, Rice, Tacos, Ramen, Burger, Ice Cream, Chicken, Pasta, Milkshake, Cake";

    $foods_array = explode(", ", $foods_string);

    echo "<h2>My 10 Favorite Foods:</h2>";
    echo "<ul>";
    foreach ($foods_array as $food) {
        echo "<li>$food</li>";
    }
    echo "</ul>";

    $foods_string_again = implode(", ", $foods_array);
    ?>
</body>
</html>
