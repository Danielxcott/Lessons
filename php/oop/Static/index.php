<?php

//Properties
//class Info{
//    static $name = "Daniel";
//    static $skill = array("html","css","js","vue","react","bootstrap","jquery","php","sql","laravel");
//    protected $age = 21;
//    public function getSkill(){
//        return self:: $skill;
//    }
//}
//
//class One extends Info{
//    public function age(){
//        return self::$name;
//    }
//}

//Methods;
class domain{
    public static function getWebsiteName(){
        return "github.com";
    }
}

class newDomain extends domain
{
    public $websiteName;

    public function __construct()
    {
        $this->websiteName = domain::getWebsiteName();
    }
}

//Properties
//$info = new Info();
//
//foreach ($info->getSkill() as $value){
//    echo $value."<br>";
//}
//
//echo One::$name;


//Methods
$domainName = new newDomain();
echo $domainName->websiteName;
