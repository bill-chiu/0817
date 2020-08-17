<?php

$x = 100;
$y = &$x;
$z = &$y;

$y = 200;
echo "x = $x </br>";
echo "y = $y </br>";
echo "z = $z </br>";
$x=300;

echo "x = $x </br>";
echo "y = $y </br>";
echo "z = $z </br>";
$z = 150;

echo "x = $x </br>";
echo "y = $y </br>";
echo "z = $z </br>";
?>