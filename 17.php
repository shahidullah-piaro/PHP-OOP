<?php 
class DistrictCollection implements IteratorAggregate{
    private $districts;

    function __construct(){
        $this->districts = array();
    }

    function add($district){
        array_push($this->districts, $district);
    }

    function getDistricts(){
        return $this->districts;
    }

    function getIterator(): Traversable {
        return new ArrayIterator($this->districts);
    }
}

$districts = new DistrictCollection();
$districts->add("Dhaka");
$districts->add("Chottogram");
$districts->add("Cumilla");

foreach($districts as $district){
    echo $district."\n";
}

// $_districts = $districts->getDistricts();
// //print_r($_districts);
// foreach($_districts as $_district){
//     echo $_district."\n";
// }
