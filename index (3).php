<?php

require ('RedCar.php');

$car = new RedCar();
echo $car->getColor();
echo $car->litr;

//$car->color = 'green';

$car->setColor('green');
echo $car->getColor();