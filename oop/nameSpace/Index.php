<?php
include "One.php";
include "Two.php";
include "Three.php";


$one = new \one\User();
$two = new \two\User();
$three = new \three\User();
echo $one->one;
echo "<br>";
echo $two->two;
echo "<br>";
echo $three->three;

