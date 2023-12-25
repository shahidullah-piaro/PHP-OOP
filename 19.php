<?php 

class Color{
    public $color;
    function __construct($color){
        $this->color = $color;
    }

    function setColor($color){
        $this->color = $color;
    }
}
class FavColor{
    public $data;
    public $color;

    function __construct($data, $color){
        $this->data = $data;
        $this->color = new Color($color);
    }

    function updateColor($color){
        $this->color->setColor($color);
    }

    function __clone(){
        $this->color = clone $this->color;
    }
}

$color = new FavColor('Some Data','red');
print_r($color);
$color2 = clone $color;
print_r($color2);

$color2->updateColor('Green');
print_r($color);
print_r($color2);
