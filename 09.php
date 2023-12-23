<?php
abstract class OurClass{
    final function doSomething(){
        echo "doing something";
    }
}

class myClass extends OurClass{
    // function doSomething(){
    //     echo "doing something";
    // }
}

$myClass = new myClass();
$myClass->doSomething();