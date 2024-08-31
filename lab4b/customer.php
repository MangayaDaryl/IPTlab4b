<?php

class Customer {
    private $name;
    private $address;
    private $dob; 
    private $cardNumber;
    private $pin;

    public function __construct($name, $address, $dob, $cardNumber, $pin) {
        $this->name = $name;
        $this->address = $address;
        $this->dob = $dob;
        $this->cardNumber = $cardNumber;
        $this->pin = $pin;
    }

    public function verifyPassword($enteredPin) {
        return $this->pin === $enteredPin;
    }

 
    public function getName() {
        return $this->name;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getDob() {
        return $this->dob;
    }

    public function getCardNumber() {
        return $this->cardNumber;
    }

    public function getPin() {
        return $this->pin;
    }
}

?>
