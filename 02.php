<?php
class Human{
	public $name;
    public $age;

    public function __construct($name, $age=0) {
        $this->name = $name;
        $this->age = $age;
    }
    function sayHi(){
    	echo "Hello\n";
        $this->sayName();
    }
    
    function sayName(){
        if($this->age){
            echo "My Name is {$this->name}, I am {$this->age} years old\n";
        }else{
            echo "My Name is {$this->name}\n";
        }
    }
}

$human = new Human("Piaro",24);
$human->sayHi();

$human2 = new Human("shahidullah");
$human2->sayHi();
