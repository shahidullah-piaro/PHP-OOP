<?php 

interface BaseAnimal{
    function isAlive();
    function eanEat($param1, $param2);
    function breed();
}

class Animal implements BaseAnimal{
    function isAlive(){}
    function eanEat($param1, $param2){}
    function breed(){}
}

interface BaseHuman extends BaseAnimal{
    function canTalk();
}

$cat = new Animal();
echo $cat instanceof BaseAnimal;
//echo $cat instanceof Human;

abstract class AbstractHuman implements BaseHuman{
    abstract function run();
    function eat(){
        echo "\nEating";
    }
}

class Human extends AbstractHuman{
    function isAlive(){}
    function eanEat($param1, $param2){}
    function breed(){}
    function run(){}
    function canTalk(){}
}

$human = new Human();
echo $human->eat();