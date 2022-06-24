<?php
 //when you use abstract, you have to define a parent class as a keyword of abstract

abstract class detail{
    public $name;
    public function __construct($name)
    {
         $this->name = $name;
    }
    abstract public function intro();
}

class car1 extends detail{
    public function intro()
    {
        return "I have ".$this->name;
    }
}

class car2 extends detail{
    public function intro()
    {
        return "I have ".$this->name;
    }
}

class car3 extends detail{

    public function intro(){
            return "I have ".$this->name;
    }
}

$car1 = new car1("Audi");
$car2 = new car2("Volvo");
$car3 = new car3("Citroen");

echo $car1->intro();
echo "<br>";
echo $car2->intro();
echo "<br>";
echo $car3->intro();
echo "<br>";


abstract class ParentClass{
    abstract public function preName($name);
}

class childClass extends ParentClass{

    public function preName($name,$separator=".",$greet="Dear")
    {
        if($name == "Lucien"){
            $title = "Mr";
        }elseif($name == "Anya"){
            $title = "Mrs";
        }else{
            $title = "";
        }
        return "{$greet}{$title}{$separator}{$name}";
    }
}
$class = new childClass();
echo $class->preName("Lucien");