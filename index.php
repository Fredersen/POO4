<?php

require_once 'vehicle/Car.php';


$voiture = new Car('red', 5, "fuel");

$voiture->setParkBrake(true);

try{
echo $voiture->start();
} catch(Exception $e){
    echo "Be carreful with the brake it's dangerous !" . "\n";
} finally{
    echo "Ma voiture roule comme un donut...";
}


