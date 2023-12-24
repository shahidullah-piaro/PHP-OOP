<?php 
define("Ok",123);

class MyClass{
    const CITY = "Dhaka";

    function sayHi(){
        echo "Hi From ".$this::CITY."\n";
        echo "Hi From ".self::CITY."\n";
    }
}

$myClass = new MyClass();
$myClass->sayHi();
echo MyClass::CITY;