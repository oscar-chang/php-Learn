<?php
class Animal{
    public $name='animal';
    protected $age=12;
    private $weight=20;

    public function __construct($name){
        $this->name = $name;
    }

    public function run(){
        echo "animal is running";
    }

    private function speed(){
        echo "height speed";
    }
}

class Cat extends Animal{
    public $name='cat';
    private $weight=20;
    protected $age=12;
    

    public function run(){
        echo "cat is running";
        echo $this->age;
    }

    private function speed(){
        echo "low speed";
    }
}

$cat = new Cat('oscar');
echo $cat->name;  //延伸
// echo $cat->weight;
// echo $cat->age;
echo $cat->run();
?>