<?php
require_once 'animal.php';
require_once 'Ape.php';
require_once 'Frog.php';

// Instance dari class Animal
$sheep = new Animal("shaun");
echo "Name: " . $sheep->name . "<br>";
echo "Legs: " . $sheep->legs . "<br>";
echo "Cold Blooded: " . $sheep->cold_blooded . "<br><br>";

// Instance dari class Frog
$kodok = new Frog("buduk");
echo "Name: " . $kodok->name . "<br>";
echo "Legs: " . $kodok->legs . "<br>";
echo "Cold Blooded: " . $kodok->cold_blooded . "<br>";
echo "Jump: ";
$kodok->jump();
echo "<br>";

// Instance dari class Ape
$sungokong = new Ape("kera sakti");
echo "Name: " . $sungokong->name . "<br>";
echo "Legs: " . $sungokong->legs . "<br>";
echo "Cold Blooded: " . $sungokong->cold_blooded . "<br>";
echo "Yell: ";
$sungokong->yell();
?>
