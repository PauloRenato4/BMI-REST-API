<?php
require '../vendor/autoload.php';
require 'BMIService.class.php';


$app =  new \Slim\Slim();

$app->get('/bmi/:weight/:height', function($weight, $height) use($app){
    $bmiIndex = 0.0;

    if(is_numeric($weight) && is_numeric($height)) {
        $bmiIndex = BMIService::getIndex($weight, $height);
    }
    
    $description = BMIService::getDescription($bmiIndex);
    
    $arrayJson = array(
        "index" =>  $bmiIndex,
        "description" => $description
    );
    
    $json = json_encode($arrayJson);
    
    sleep (0.5);
    
    echo $json;

});

$app->run();
?>