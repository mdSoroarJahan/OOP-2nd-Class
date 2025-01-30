<?php

class Account{
    public function accountInfo(){
        return "Name, Email, Phone";
    }
    private function accountBalance(){
        return "30000000";
    }
    protected function accountTransaction(){
        return "2000,5000,7864387";
    }
}

?>