<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST["html_content"] ?? "";
    
    function convertWithHtmlSpecialChars($str) {
        return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
    }
    
    function convertWithStripTags($str) {
        return strip_tags($str);
    }
    
    function convertWithHtmlEntities($str) {
        return htmlentities($str, ENT_QUOTES, 'UTF-8');
    }
    
    $htmlspecialchars_result = convertWithHtmlSpecialChars($input);
    $strip_tags_result = convertWithStripTags($input);
    $htmlentities_result = convertWithHtmlEntities($input);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>HTML Transformer</title>
</head>
<body>
    <form method="post">
        <textarea name="html_content" rows="5" cols="50"><?php echo isset($input) ? htmlspecialchars($input) : ''; ?></textarea>
        <br>
        <input type="submit" value="Transform">
    </form>
    
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h2>Results:</h2>
        <p><strong>htmlspecialchars:</strong> <pre><?php echo htmlspecialchars($htmlspecialchars_result); ?></pre></p>
        <p><strong>strip_tags:</strong> <?php echo $strip_tags_result; ?></p>
        <p><strong>htmlentities:</strong> <pre><?php echo htmlentities($htmlentities_result); ?></pre></p>
    <?php endif; ?>
</body>
</html>