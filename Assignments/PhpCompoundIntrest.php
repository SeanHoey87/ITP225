<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function calculateCompoundInterest($principal, $rate, $time, $compoundingsPerYear) {
        // Convert rate% to decimal
        $rate = $rate / 100;

        // compound interest formula / calculation
        $amount = $principal * pow((1 + $rate / $compoundingsPerYear), $compoundingsPerYear * $time);

        // Return the final amount
        return round($amount, 2);
    }


    $principal = 2000;   // Initial investment
    $rate = 6;           // Annual interest rate in percentage
    $time = 8;          // Time in years
    $compoundingsPerYear = 4; // Quarterly compounding

    $finalAmount = calculateCompoundInterest($principal, $rate, $time, $compoundingsPerYear);

    echo "Final Amount after Compound Interest: $" . number_format($finalAmount, 2);
    ?>
</body>
</html>
