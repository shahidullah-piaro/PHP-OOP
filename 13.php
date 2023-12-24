<?php 
class A{
    static function sayHi(){
        echo "Hi form Class A\n";
    }
}

class B extends A{
    static function sayHi(){
        echo "Hi from B\n";
        //parent::sayHi();
    }
}

B::sayHi();