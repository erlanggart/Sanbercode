<?php

// require ('animal.php');
require ('ape.php');
require ('frog.php');

$hewan = new Animal ("shaun");

echo "nama hewan " . $hewan -> name;
echo "<br>";
echo "berkaki " . $hewan -> legs;
echo "<br>";
echo "cold bold " . $hewan -> coldblood;
echo "<br> <br>";

$monyet = new Ape ("kera");

echo "nama hewan " . $monyet -> name;
echo "<br>";
echo "berkaki " . $monyet -> legs;
echo "<br>";
echo "cold bold " . $monyet -> coldblood;
echo "<br>";
echo "yell : ";
$monyet->yell();
echo "<br> <br>";

$katak = new Kodok ("buduk");

echo "nama hewan " . $katak -> name;
echo "<br>";
echo "berkaki " . $katak -> legs;
echo "<br>";
echo "cold bold " . $katak -> coldblood;
echo "<br>";
echo "jump : ";
$katak->jump();
?>

