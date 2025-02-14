<?php
$first_name = $last_name = $url = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
    $firstName = isset($_POST['firstName']) ? htmlspecialchars($_POST['firstName']) : '';
    $lastName = isset($_POST['lastName']) ? htmlspecialchars($_POST['lastName']) : '';
    $url = isset($_POST['url']) ? htmlspecialchars($_POST['url']) : '';
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {
    $firstName = isset($_GET['firstName']) ? htmlspecialchars($_GET['firstName']) : '';
    $lastName = isset($_GET['lastName']) ? htmlspecialchars($_GET['lastName']) : '';
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
        <input type="text" name="firstName" required/><br>
        <label>Last name: </label>
        <input type="text" name="lastName" required/><br>
        <label>URL: </label>
        <input type="url" name="url" required/><br>
        <input type="submit" value="Submit using GET"/>
    </form>
    
    <form action="" method="post">
        <label>First name: </label>
        <input type="text" name="firstName" required/><br>
        <label>Last name: </label>
        <input type="text" name="lastName" required/><br>
        <label>URL: </label>
        <input type="url" name="url" required/><br>
        <input type="submit" value="Submit using POST"/>
    </form>

    <?php if (!empty($firstName) && !empty($lastName) && !empty($url)): ?>
        <h3>Received Data:</h3>
        <p><strong>First Name:</strong> <?php echo $firstName; ?></p>
        <p><strong>Last Name:</strong> <?php echo $lastName; ?></p>
        <p><strong>URL:</strong> <a href="<?php echo $url; ?>" target="_blank"><?php echo $url; ?></a></p>
    <?php endif; ?>
</body>
</html>
