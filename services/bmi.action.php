<?php
require 'BMIService.class.php';

$weight = $_GET['weight'];
$height = $_GET['height'];
$bmiIndex = 0.0;

if(is_numeric($weight) && is_numeric($height)) {
    $bmiIndex = BMIService::getIndex($weight, $height);
}

$description = BMIService::getDescription($bmiIndex);

$arrayJson = array(
    'index' =>  $bmiIndex,
    'description' => $description
);

$json = json_encode($arrayJson);

sleep (1);

echo $json;
?>