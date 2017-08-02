<?php
include "Person.php";

$human1 = new Person();
$human2 = new Person();

$human2->firstname = "Rachael";

$human1->walk();
$human1->makeFriend($human2);

?>

<h1>Q1: What is human1 name?</h1>
<h3>Ans: <?=$human1->firstname.' '.$human1->lastname?></h3>

<?php

$human1->firstname = 'Michael';
$human1->lastname = 'Tan';

?>

<h1>Q2: What is human1 name NOW?</h1>
<h3>Ans: <?=$human1->firstname.' '.$human1->lastname?></h3>