<?php


require_once 'Vehicule.php';


// Visualisation de Bicycle
echo "Bicycle".'</br>';

require_once 'Bicycle.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

echo '</br>'.'</br>';


//Visualisation de Car

echo "Car".'</br>';

require_once 'Car.php';

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);
echo '</br>'.'</br>';


// Visualisation de Camion
echo "Truck".'</br>';


require_once 'Truck.php';

$truck = new Truck('blue', 3, 'electric', 'in filling');
var_dump($truck);









