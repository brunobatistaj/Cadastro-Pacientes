<?php

$filePath = 'patients.json';
$jsonDecode = [];

if(file_exists($filePath)){
    $jsonContent = file_get_contents($filePath);
    $jsonDecode = json_decode($jsonContent, true);
}

echo json_encode($jsonDecode);
?>
