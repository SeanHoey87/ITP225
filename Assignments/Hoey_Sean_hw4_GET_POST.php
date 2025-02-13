<?php
$first_name = $last_name = $url = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
    $first_name = isset($_POST['first_name']) ? htmlspecialchars($_POST['first_name']) : '';
    $last_name = isset($_POST['last_name']) ? htmlspecialchars($_POST['last_name']) : '';
    $url = isset($_POST['url']) ? htmlspecialchars($_POST['url']) : '';
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {
    $first_name = isset($_GET['first_name']) ? htmlspecialchars($_GET['first_name']) : '';
    $last_name = isset($_GET['last_name']) ? htmlspecialchars($_GET['last_name']) : '';
    $url = isset($_GET['url']) ? htmlspecialchars($_GET['url']) : '';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Handling with POST and GET</title>
</head>
<body>
    <h2>Submit Your Information</h2>
    <form action="" method="get">
        <label>First name: </label>
        <input type="text" name="first_name" required/><br>
        <label>Last name: </label>
        <input type="text" name="last_name" required/><br>
        <label>URL: </label>
        <input type="url" name="url" required/><br>
        <input type="submit" value="Submit using GET"/>
    </form>
    
    <form action="" method="post">
        <label>First name: </label>
        <input type="text" name="first_name" required/><br>
        <label>Last name: </label>
        <input type="text" name="last_name" required/><br>
        <label>URL: </label>
        <input type="url" name="url" required/><br>
        <input type="submit" value="Submit using POST"/>
    </form>

    <?php if (!empty($first_name) && !empty($last_name) && !empty($url)): ?>
        <h3>Received Data:</h3>
        <p><strong>First Name:</strong> <?php echo $first_name; ?></p>
        <p><strong>Last Name:</strong> <?php echo $last_name; ?></p>
        <p><strong>URL:</strong> <a href="<?php echo $url; ?>" target="_blank"><?php echo $url; ?></a></p>
    <?php endif; ?>
</body>
</html>
