<?php
class MotorCycle{
    private $param;
    function __construct($displacement, $capacity, $mileage){
        $this->param = [];
        $this->param['displacement'] = $displacement;
        $this->param['capacity'] = $capacity;
        $this->param['mileage'] = $mileage;
    }

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

    function __call($method, $args){
        if('go' == $method){
            if($args){
                echo "I am running at {$args[0]}\n";
            }else{
                echo "I am running\n";
            }
        }
    }

    static function __callStatic($method, $args){
        if('run' == $method){
            if($args){
                echo "Static call's {$args[0]}\n";
            }else{
                echo "Static call\n";
            }
        }
    }
}

$pulser = new MotorCycle('150cc','16ltr','40kmph');

if(isset($pulser->tiresize)){
    echo "Found\n";
}else {
    echo "Not Found\n";
}

unset($pulser->mileage);

$pulser->go('100kmph');

MotorCycle::run('argument');
