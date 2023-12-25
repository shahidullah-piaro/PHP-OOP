<?php
namespace Astronomy;

include("planet.php");
include("earth.php");

$planet = new \Astronomy\Planets\Earth(); //qualified
//$planet = new Planets\Planet(); //unqualified

$planet->getName();