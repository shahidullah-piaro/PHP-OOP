<?php 
class Planet{
    public $name;

    function __construct($name){
        $this->name = $name;
    }
}

$e = new Planet("Earth");
$e2 = $e;
$e1 = new Planet("Earth");
$m = new Planet("Mars");

if($e == $e1){
    echo "Similar\n";
}else {
    echo "Not Similar\n";
}

if($e === $e1){
    echo "Similar\n";
}else {
    echo "Not Similar\n";
}

if($e === $e2){
    echo "Similar\n";
}else {
    echo "Not Similar\n";
}