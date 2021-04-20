<?php
require_once __DIR__ . '/vendor/autoload.php';

$object = new \worker_one\Worker();
$object->name = "Иван";
$object->age = 25;
$object->salary = 1000;

echo '<br>';
$object_2 = new worker_one\Worker();
$object_2->name = "Вася";
$object_2->age = 26;
$object_2->salary = 2000;
echo '<br>';
$summ = $object->salary + $object_2->salary;
echo "summ = " . $summ;

echo '<hr>';

$object = new worker_two\Worker();
$object->setName('Иван');
echo "Имя: " . $object->getName() . '<br>';
$object->setAge(25);
echo "Возраст: " . $object->getAge() . '<br>';
$object->setSalary(1000);
echo "Зарплата: " . $object->getSalary();
echo '<br>';
echo '<br>';
$object_2 = new worker_two\Worker();
$object_2->setName('Вася');
echo "Имя: " . $object_2->getName() . '<br>';
$object_2->setAge(26);
echo "Возраст: " . $object_2->getAge() . '<br>';
$object_2->setSalary(2000);
echo "Зарплата: " . $object_2->getSalary();
$summ = $object->getSalary() + $object_2->getSalary();
echo '<br>';
echo '<br>';
echo 'Сумма зарплат равна = ' . $summ;

