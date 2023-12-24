<?php 
class MathCalculator{
    private $number;
    static $name;
    static function fibonacci($n){
        echo self::$name."\n";
        self::doSomething();
        echo "Fibonacci series up to {$n}\n";
    }

    function factorial($n){
        self::$name = "ABCD";
        $this->number = $n;
        self::doSomething();
        $this->doSomething();
        echo "Calculating factorial of {$n}\n";
    }

    static function doSomething(){
        echo "Doing something\n";
    }
}

$mathCalculator = new MathCalculator();
$mathCalculator->factorial(8);
MathCalculator::fibonacci(10);
echo MathCalculator::$name;