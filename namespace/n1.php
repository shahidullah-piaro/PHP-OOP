<?php 
namespace Project;

include("c1.php");
include("c2.php");

use \Project\Motorcycles\Bike as Hornet;

$bike = new Bike();
//$bike2 = new Motorcycles\Bike();
$bike2 = new Hornet();

echo $bike->getName();
echo $bike2->getName();