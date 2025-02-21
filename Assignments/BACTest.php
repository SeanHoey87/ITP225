<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bac = floatval($_POST["bac"]);
    
    if ($bac < 0.05) {
        $message = "Everything is OK. not under the influence of alcohol.";
    } elseif ($bac >= 0.05 && $bac <= 0.08) {
        $message = "OK, but Slightly Higher than Normal";
    } else {
        $message = "Over the Influence of Alcohol. You are under the influence and should not drive.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>BAC Level Tester</title>
</head>
<body>
    <h2>Blood Alcohol Content (BAC) Tester</h2>
    <form method="post">
        <label for="bac">Enter your BAC level:</label>
        <input type="number" step="0.01" name="bac" required>
        <button type="submit">Check</button>
    </form>
    
    <?php if (isset($message)): ?>
        <p><strong>Result:</strong> <?php echo htmlspecialchars($message); ?></p>
    <?php endif; ?>
</body>
</html>