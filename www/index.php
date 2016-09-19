<?php

require __DIR__ . '/../app/Water.php';
require __DIR__ . '/../app/Cold.php';
require __DIR__ . '/../app/Heat.php';

$drink = new \app\Water();
$drink->temperature = 15;
echo "Температура воды " . $drink->getTemperature() . "<br>";

$heatDrink  = new \app\Heat(); // достаем горячую воду
$drink->changeTemperature( $heatDrink->RandHead($drink->getTemperature()) ); // смешиваем нашу воду с горячей водой

$coldDrink  = new \app\Cold(); // достаем холодную воду
$drink->changeTemperature( $coldDrink->RandCold($drink->getTemperature()) ); // смешиваем нашу воду с холодной водой