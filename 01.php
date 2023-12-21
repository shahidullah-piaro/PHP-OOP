<?php
class Human{
	public $name;
    function sayHi(){
    	echo "Hello\n";
        $this->sayName();
    }
    
    function sayName(){
    	echo "My Name is {$this->name}\n";
    }
}

$human = new Human();
$human->name = "Piaro";
$human->sayHi();