<?php

// Function to MD5 hash
function md5_hash($input) {
    return md5($input);
}

// Function to SHA1 hash
function sha1_hash($input) {
    return sha1($input);
}

// Function to get user input
function get_user_input() {
    // Get input
    $input = readline("Enter the string to hash: ");
    
    // Trim spaces and convert to lowercase
    $input = strtolower(trim($input));

    return $input;
}

// Function to choose hash type
function get_hash_type() {
    $hash_type = readline("Choose hash type (md5/sha1): ");
    
    // Convert to lowercase to avoid case sensitivity
    $hash_type = strtolower(trim($hash_type));

    return $hash_type;
}


$hash_type = get_hash_type();  // Get the hash type choice
$input = get_user_input();  // Get user input

// Output the hash
if ($hash_type === 'md5') {
    echo "MD5 Hash: " . md5_hash($input) . "\n";
} elseif ($hash_type === 'sha1') {
    echo "SHA1 Hash: " . sha1_hash($input) . "\n";
} else {
    echo "Invalid hash type. Please choose 'md5' or 'sha1'.\n";
}

?>
