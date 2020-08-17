<?php

function test10($i) {
	return $i + 10;
}

function test100($i) {
	return $i + 100;
}

// $x = 1;
// echo test10($x);

$x = "test10";
$p = "test100";
$y = 2;
echo $p($x($y));

?>