<?php 
// function __autoload($class) {
//     include "{$class}.php";
// }

function autoload( $class ){
    if(strpos($class,"Planet_") !== false){
        $filename = str_replace("Planet_","", $class);
        include strtolower("planets/{$filename}.php");
    }else{
        include strtolower("{$class}.php");
    }
}

spl_autoload_register("autoload");

(new Spaceship)->launch();
(new Bike)->getType();
(new Planet_Mars)->getName();

