<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["grade"]) && is_numeric($_POST["grade"])) {
        $grade = floatval($_POST["grade"]);
        
        if ($grade < 0 || $grade > 100) {
            $message = "Invalid input. Enter a grade between 0 and 100.";
        } else {
            if ($grade > 90.0) {
                $letter = "A";
            } elseif ($grade > 80.0) {
                $letter = "B";
            } elseif ($grade > 70.0) {
                $letter = "C";
            } elseif ($grade > 60.0) {
                $letter = "D";
            } else {
                $letter = "F";
            }
            $message = "letter grade is: $letter";
        }
    } else {
        $message = "Invalid input. enter a valid grade.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h2>Enter Grade</h2>
    <form method="post">
        <label for="grade">Enter a grade (0-100):</label>
        <input type="text" name="grade" required>
        <button type="submit">Calculate Grade</button>
    </form>
    
    <?php if (isset($message)): ?>
        <p><strong>Result:</strong> <?php echo htmlspecialchars($message); ?></p>
    <?php endif; ?>
</body>
</html>
