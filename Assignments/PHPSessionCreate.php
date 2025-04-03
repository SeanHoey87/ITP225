<?php
session_start(); // start session
$_SESSION["name"] = "Test Session";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Session Start</title>
</head>
<body>
    <h1>Session Started</h1>
    <p>Session name is set to: <strong><?php echo $_SESSION["name"]; ?></strong></p>
    <a href="PHPSessionModify.php"><button>Modify Session</button></a>
</body>
</html>
