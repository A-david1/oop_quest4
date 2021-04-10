<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';



$tutut = new Car("vert", 4, "fuel");
$tutut->setHasParkBrake(true);

try{
    $tutut->forward();
} catch (Exception $e){
    $tutut->setHasParkBrake(false);
} finally {
    echo "Ma voiture roule comme un donut.";
}


