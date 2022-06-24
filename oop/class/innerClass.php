<?php

class InnerClass{

    public function another(){

        return new class extends InnerClass {

            public $name = "Lucien";

            public function innerTwo(){

                return new class extends InnerClass{

                        public function innnerFun(){

                            return "Finally, you found me!!";
                        }
                };
            }
        };


    }
}

$inner = new InnerClass();
echo $inner->another()->name."<br>";
echo $inner->another()->innerTwo()->innnerFun();