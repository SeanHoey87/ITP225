<?php


$num1 = readline("Enter the first number: ");
$num2 = readline("Enter the second number: ");
$num3 = readline("Enter the third number: ");
$num4 = readline("Enter the fourth number: ");

$result = 0;

$result = $num1 + $num2 + $num3 + $num4;
echo "The result for addition is: $result\n";
$result = $num1 - $num2 - $num3 - $num4;
echo "The result for subtraction is: $result\n";
$result = $num1 * $num2 * $num3 * $num4;
echo "The result for multiplication is: $result\n";
 if ($num2 == 0 || $num3 == 0 || $num4 == 0) {
    echo "Division by zero is not allowed.\n";
}else{
    $result = $num1 / $num2 / $num3 / $num4;
    echo "The result for division is: $result\n";
}



?>