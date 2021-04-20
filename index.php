<?php
require_once __DIR__ . '/vendor/autoload.php';

$object = new \worker_one\worker();
$object->name = "Иван";
$object->age = 25;
$object->salary = 1000;

print_r($object);
echo '<br>';
$object_2 = new worker_one\worker();
$object_2->name = "Вася";
$object_2->age = 26;
$object_2->salary = 2000;
print_r($object_2);
echo '<br>';

$summ = $object->salary + $object_2->salary;
echo "summ = " . $summ;
echo '<hr>';

$object = new worker_two\worker();
$object->SetName('Иван');
echo "Имя: " . $object->GetName() . '<br>';
$object->SetAge(25);
echo "Возраст: " . $object->GetAge() . '<br>';
$object->SetSalary(1000);
echo "Зарплата: " . $object->GetSalary();
echo '<br>';
echo '<br>';
$object_2 = new worker_two\worker();
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

