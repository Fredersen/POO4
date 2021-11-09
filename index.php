<?php

require_once 'vehicle/Car.php';


$voiture = new Car('red', 5, "fuel");

$voiture->setParkBrake(true);

try{
echo $voiture->start();
} catch(Exception $e){
    $voiture->setParkBrake(false);
    echo $e->getMessage() . "\n";
} finally{
    echo "Ma voiture roule comme un donut...";
}


