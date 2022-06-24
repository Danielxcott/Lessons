<?php 

class first{

    public $x = "Hello";
    private $age = 21;
    protected $address = "no(123),123street";

    public function greet(){
        return $this->x.",How are you?";
    }
    protected function age(){
        return "I am 21 yrs old";
    }
    private function details(){
        $age = 21;
        $bank = 3427293980;
        return "hello i am ".$age."and my bank acc num is ".$bank;
    }

    //Getter and Setter
    public function getAge()
    {
        return $this->age."<br>";
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getPrivate(){
        return $this->details();
    }



}
$obj = new first();
//echo $obj->x;
//echo $obj->greet();
$obj->setAge("22");//when you want to change property or want to access private and protected properties;
echo $obj->getAge();
echo $obj->getPrivate();
