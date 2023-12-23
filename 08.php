<?php 
abstract class OurClass{
    function sayHi(){
        echo "Hi\n";
        $this->eat();
    }

    abstract function eat();
}

class MyClass extends OurClass{
    // function sayHi(){
    //     echo "Hello\n";
    //     $this->eat();
    // }

    function eat(){
        echo "Eating";
    }
}

$myClass = new MyClass();
$myClass->sayHi();