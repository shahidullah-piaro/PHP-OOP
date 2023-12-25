<?php
class MotorCycle{
    private $param;
    function __construct($displacement, $capacity, $mileage){
        $this->param = [];
        $this->param['displacement'] = $displacement;
        $this->param['capacity'] = $capacity;
        $this->param['mileage'] = $mileage;
    }

    // function getDisplacement(){
    //     return $this->param['displacement'];
    // }

    // function setDisplacement($displacement){
    //     $this->param['displacement'] = $displacement;
    // }

    function __isset($name){
        if(!isset($this->param[$name])){
            return false;
        }
        return true;
    }

    function __unset($name){
        print_r($this->param);
        unset($this->param[$name]);
        print_r($this->param);
    }

    function __get($prop){
        echo $this->param[$prop];
    }

    function __set($prop, $value){
        echo $this->param[$prop] = $value;
    }
}

$pulser = new MotorCycle('150cc','16ltr','40kmph');

// echo $pulser->getDisplacement();
// echo $pulser->displacement;

if(isset($pulser->tiresize)){
    echo "Found\n";
}else {
    echo "Not Found\n";
}

unset($pulser->mileage);


