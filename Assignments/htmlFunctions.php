<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
    $html_content = isset($_POST['html_content']) ? $_POST['html_content'] : '';
} else {
    $html_content = "";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP HTML Functions Test</title>
</head>
<body>
    <h2>Test PHP HTML Functions</h2>
    <form action="" method="post">
        <label>Enter HTML Content:</label>
        <textarea name="html_content" required><?php echo htmlspecialchars($html_content); ?></textarea><br>
        <input type="submit" value="Submit"/>
    </form>

    <?php if (!empty($html_content)): ?>
        <h3>Results of PHP Functions:</h3>
        <p><strong>Original:</strong> <?php echo htmlspecialchars($html_content); ?></p>
        <p><strong>Using htmlspecialchars():</strong> <?php echo htmlspecialchars($html_content); ?></p>
        <p><strong>Using htmlentities():</strong> <?php echo htmlentities($html_content); ?></p>
        <p><strong>Using strip_tags():</strong> <?php echo strip_tags($html_content); ?></p>
    <?php endif; ?>
</body>
</html>