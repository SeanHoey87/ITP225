<?php

function readDataFromFile($filename) {
    $data = [];
    
    if (!file_exists($filename)) {
        die("Error: File not found.\n");
    }
    
    $file = fopen($filename, "r");
    if (!$file) {
        die("Error: Unable to open file.\n");
    }
    
    echo "Reading file: $filename\n";
    
    while (($line = fgets($file)) !== false && count($data) < 12) {

        
        $parts = explode(" ", trim($line), 2);
        if (count($parts) < 2) continue;
        
        $type = $parts[0];
        $value = $parts[1];
        
        switch ($type) {
            case 'i':
                $data[] = (int)$value;
                break;
            case 'f':
                $data[] = (float)$value;
                break;
            case 's':
                $data[] = (string)$value;
                break;
            case 'd':
                $data[] = $value;
                break;
            default:
                echo "Unknown data type: $type\n";
        }
    }
    fclose($file);
    return $data;
}

function printArray($array) {
    foreach ($array as $index => $value) {
        echo "Element ".($index + 1).": ".(is_float($value) ? number_format($value, 2) : $value)."\n";
    }
}

$filename = "data.txt";
$dataArray = readDataFromFile($filename);
printArray($dataArray);

?>
