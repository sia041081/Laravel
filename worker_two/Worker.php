<?php

namespace Worker_two;

class worker
{
    private $name;
    private $age;
    private $salary;

    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
       return $this->name;
    }
    public function setAge($age){
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }
    private function checkAge($age){
        if ($age >= 100 || $age <= 1) {
        false;
    } else {
            return true;
        }


}
    public function getAge(){

     return  $this->age;
    }
    public function setSalary($salary){
$this->salary = $salary;
    }
    public function getSalary(){
    return $this->salary;
    }
}

