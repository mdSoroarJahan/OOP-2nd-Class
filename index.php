<?php

class Kitchen{
    public $onion = 7;

   static public function inTheKitchen(){
        echo "Who is in the kitchen?\n";
    }
}

// $obj = new Kitchen();
// $obj->inTheKitchen();
Kitchen::inTheKitchen();

?>