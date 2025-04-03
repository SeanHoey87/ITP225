<?php
session_start();

if (isset($_SESSION["name"])) {
    $_SESSION["name"] = "New Session Update";
    $message = "Session name updated to: " . $_SESSION["name"];
} else {
    $message = "No session found. Please start a session first.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Modify Session</title>
</head>
<body>
    <h1>Modify Session</h1>
    <p><?php echo $message; ?></p>
    <a href="PHPSessionDestroy.php">Destroy Session</a>
</body>
</html>
