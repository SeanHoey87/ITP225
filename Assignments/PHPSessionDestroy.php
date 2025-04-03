<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Destroy Session</title>
</head>
<body>
    <h1>Session Destroyed</h1>
    <p>Session has been cleared.</p>
    <a href="PHPSessionCreate.php"><button>Start New Session</button></a>
</body>
</html>
