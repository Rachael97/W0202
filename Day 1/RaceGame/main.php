<?php
include "Animal2.php";
include "Rabbit.php";
include "Tortoise.php";
include "Game.php";

$rabbit = new Rabbit();
$tortoise = new Tortoise();

$game = new Game();

$game->welcome($rabbit);
$game->welcome($tortoise);

$game->racingStart();


?>