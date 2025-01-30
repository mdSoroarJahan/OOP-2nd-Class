<?php

use Father as GlobalFather;

abstract class Father{
    public $land = "I have 20 bighas of land.";

    public function bike(){
        echo "I have 1 bike.\n";
    }
    
}

class Son extends Father{
    public function car(){
        echo "I am son and I have a car.\n";
    }
}

$obj1 = new Son();
$obj1->bike();

?>