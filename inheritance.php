<?php

class Father{
    public $land = "I have 20 bugha of land.";

    public function bike(){
        echo "I have 1 bike\n";
    }
}

class Son extends Father{
   public function car(){
    echo "I am son and I have a car.\n";
   }
}

$objSon = new Son();

$objSon->bike();
echo $objSon->land . "\n";
$objSon->car();


?>