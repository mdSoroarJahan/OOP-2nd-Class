<?php

class Father{
    public $land = "I have 20 bighas of land.";

    public function bike(){
        echo "I have 1 bike\n.";
    }
}

class Son extends Father{
    public function bike(){
        echo "I sold my bike and made a house with it.\n";
    }
}

$objSon = new Son();
$objSon->bike();

$objFather = new Father();
$objFather->bike();

?>