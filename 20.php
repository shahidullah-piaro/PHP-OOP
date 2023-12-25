<?php 

class Color{
    public $color;
    function __construct($color){
        $this->color = $color;
    }

    function setColor($color){
        $this->color = $color;
    }

    function __toString(){
        return "The Color is {$this->color}.";
    }
}

$color = new Color("Red");
echo $color;
