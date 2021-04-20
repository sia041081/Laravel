<?php
 class Worker
 {
    public $name;
    public $age;
    public $salary;
 }
 $object = new Worker();
 $object->name = "Иван";
 $object->age = 25;
 $object->salary = 1000;

 print_r($object);
 echo '<br>';
 $object_2 = new Worker();
 $object_2->name = "Вася";
 $object_2->age = 26;
$object_2->salary = 2000;
 print_r($object_2);
echo '<br>';

$summ = $object->salary + $object_2->salary;
 echo "summ = " . $summ;