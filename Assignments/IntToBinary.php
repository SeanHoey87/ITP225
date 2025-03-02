<?php

//  get user input
function get_integer_input() {
    // Prompt user input
    $input = readline("Enter an integer value: ");
    
    // Check if input is a valid integer
    if (is_numeric($input) && (int)$input == $input) {
        return (int)$input; // Return as integer
    } else {
        echo "Please enter a valid integer.\n";
        return get_integer_input(); // Prompt again if not valid
    }
}

$integer_value = get_integer_input();  // Get integer input

// Convert to binary
$binary_value = decbin($integer_value);

// Output the binary value
echo "Binary Value: " . $binary_value . "\n";

?>
