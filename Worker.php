<?php


class Worker
{
    private $name;
    private $age;
    private $salary;

    public function SetName($name){
        $this->name = $name;
    }
    public function GetName(){
       return $this->name;
    }
    public function SetAge($age){
        if ($this->CheckAge($age)) {
            $this->age = $age;
        }
    }
    private function CheckAge($age){
        if ($age >= 100 || $age <= 1) {
        false;
    } else {
            return true;
        }


}
    public function GetAge(){

     return  $this->age;
    }
    public function SetSalary($salary){
$this->salary = $salary;
    }
    public function GetSalary(){
    return $this->salary;
    }
}

$object = new Worker();
$object->SetName('Иван');
echo "Имя: " . $object->GetName() . '<br>';
$object->SetAge(25);
echo "Возраст: " . $object->GetAge() . '<br>';
$object->SetSalary(1000);
echo "Зарплата: " . $object->GetSalary();
echo '<br>';
echo '<br>';
$object_2 = new Worker();
$object_2->SetName('Вася');
echo "Имя: " . $object_2->GetName() . '<br>';
$object_2->SetAge(26);
echo "Возраст: " . $object_2->GetAge() . '<br>';
$object_2->SetSalary(2000);
echo "Зарплата: " . $object_2->GetSalary();
$summ = $object->GetSalary() + $object_2->GetSalary();
echo '<br>';
echo '<br>';
echo 'Сумма зарплат равна = ' . $summ;