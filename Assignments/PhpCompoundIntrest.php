<?php
// Function to calculate compound interest
function calculateCompoundInterest($principal, $rate, $time, $compounds_per_year) {
    // Convert % to decimal
    $rate_decimal = $rate / 100;

    // Calculate the compound interest formula part (1 + r/n)
    $compound_factor = 1 + ($rate_decimal / $compounds_per_year);

    // Calculate the exponent (nt)
    $exponent = $compounds_per_year * $time;

    // The compound interest formula
    $amount = $principal * pow($compound_factor, $exponent);

    return $amount;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and clean inputs
    $principal = floatval($_POST['principal']);
    $rate = floatval($_POST['rate']);
    $time = floatval($_POST['time']);
    $compounds_per_year = floatval($_POST['compounds_per_year']);

    // Calculate the compound interest 
    $compound_interest_amount = calculateCompoundInterest($principal, $rate, $time, $compounds_per_year);

    // Round the result
    $result = round($compound_interest_amount, 2);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compound Interest Calculator</title>
</head>
<body>
    <h1>Compound Interest Calculator</h1>

    <form method="post" action="">
        <label for="principal">Principal Amount (Initial Investment):</label><br>
        <input type="number" name="principal" id="principal" step="0.01" required><br><br>

        <label for="rate">Annual Interest Rate (in %):</label><br>
        <input type="number" name="rate" id="rate" step="0.01" required><br><br>

        <label for="time">Time Period (in years):</label><br>
        <input type="number" name="time" id="time" step="0.1" required><br><br>

        <label for="compounds_per_year">Number of Compounding Periods per Year:</label><br>
        <input type="number" name="compounds_per_year" id="compounds_per_year" step="1" required><br><br>

        <button type="submit">Calculate</button>
    </form>

    <?php if (isset($result)): ?>
        <h2>Result:</h2>
        <p>The amount after compound interest is: $<?php echo $result; ?></p>
    <?php endif; ?>

</body>
</html>
