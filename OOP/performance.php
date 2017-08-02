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

$zoo->animalIn($tiger);
$zoo->animalIn($bird);
$zoo->animalIn($dog);

$zoo->performanceStart();


?>