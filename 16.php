<?php 
class Student{
    private $name;
    private $age;
    private $class;

    function __construct($name='', $age='', $class=''){
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function __get($prop){
        return strtoupper($this->$prop."\n");
    }

    public function __set($prop,$val){
        $this->$prop = $val;
    }

    // public function getName(){
    //     return $this->name."\n";
    // }

    // public function getAge(){
    //     return $this->age."\n";
    // }

    // public function getClass(){
    //     return $this->class."\n";
    // }

    // function setName($name){
    //     $this->name = $name;
    // }

    // public function setAge($age){
    //     $this->age = $age;
    // }

    // public function setClass($class){
    //     $this->class = $class;
    // }
}

// $student = new Student();
// $student->setName("Rahim");
// echo $student->getName();
$student = new Student('Rahim', 20, 12);
echo $student->name;
$student->name = "Kamal";
echo $student->name;
