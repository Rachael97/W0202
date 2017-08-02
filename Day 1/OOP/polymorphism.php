<?php
include "Animal.php";
include "Tiger.php";
include "Bird.php";
include "Dog.php";
include "Zoo.php";

$zoo = new Zoo();

$tiger = new Tiger();
$bird = new Bird();
$dog = new Dog();

unset($dog); //dog will die here and 執行__destruct

$zoo->animalIn($tiger);
$zoo->animalIn($bird);
//$zoo->animalIn($dog);

$zoo->performanceStart();


?>