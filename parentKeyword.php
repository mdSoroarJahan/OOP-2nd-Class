<?php

class Father{
    public $land = "I have 20 bighas of land.";

    public function __construct()
    {
        echo "5000000 debt\n";
    }

    public function bike(){
        echo "I have 1 bike\n.";
    }

    public function sum(){
        return (10+20);
    }
}

class Son extends Father{

    public function __construct()
    {
        echo "Son's debt 1000000000.\n";
        parent::__construct();
    }
    public function bike(){
        echo "I sold my bike and made a house with it.\n";
    }

    public function bazarCalculation(){
        $sumResultFromFather = parent::sum();
        echo $sumResultFromFather*34;
    }
}

$obj1 = new Son();
$obj1->bazarCalculation();
?>