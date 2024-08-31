<?php

class Bank {
    private $code;
    private $address;

    public function __construct($code, $address) {
        $this->code = $code;
        $this->address = $address;
    }

    public function manages(ATM $atm) {
   
    }

    public function maintain() {
    
    }

  
    public function getCode() {
        return $this->code;
    }

    public function getAddress() {
        return $this->address;
    }
}

?>
