<?php
include "One.php";
include  "Two.php";
include  "Three.php";


class AllTrait extends Three {
    use One,Two;
}
$obj = new AllTrait();
echo $obj->greet;
echo "<br>";
echo $obj->y;
echo "<br>";
echo $obj->x;

