<?php

interface purchaseInt{
    public function purchase();
}

interface salesInt{
    public function sales();
}

interface lossProInt{
    public function calcu(int $a, $b);
}

class MyCalculation implements purchaseInt, salesInt, lossProInt{
    public function purchase()
    {
        
    }

    public function sales()
    {
        
    }

    public function calcu(int $a, $b)
    {
        
    }
}


?>