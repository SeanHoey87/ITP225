<?php

function getFilesFromDirectory($directory) {
    $files = array_diff(scandir($directory), array('..', '.'));
    $fileArray = [];
    
    $count = 0;
    foreach ($files as $file) {
        if ($count >= 5) break;
        $fileArray[] = $file;
        $count++;
    }
    
    return $fileArray;
}

function hashFiles($files, $directory, $algorithm = 'sha256') {
    foreach ($files as $file) {
        $filePath = $directory . DIRECTORY_SEPARATOR . $file;
        if (is_file($filePath)) {
            $hash = hash_file($algorithm, $filePath);
            echo "File: $file => Hash ($algorithm): $hash\n";
        }
    }
}

$directory = "C:\\xampp\\htdocs\\homework\\ITP225\\Assignments\\Test files"; //change depending on where files are stored
$fileArray = getFilesFromDirectory($directory);
hashFiles($fileArray, $directory);

?>