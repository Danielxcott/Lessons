<?php
include "Rule.php";

class Cat implements Animal {
    public function makeSound()
    {
        echo "Meow";
    }
}
class Dog implements Animal{
    public function makeSound()
    {
        echo "Bark";
    }
}
class Mouse implements Animal{
    public function makeSound()
    {
        echo "Squeak";
    }
}

$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();

$array = array($cat,$dog,$mouse);
foreach ($array as $arr){
    echo $arr->makeSound()."<br>";
}
