<?php

class Account {
    protected $number;
    protected $balance;

    public function __construct($number, $balance) {
        $this->number = $number;
        $this->balance = $balance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if ($amount > $this->balance) {
            throw new Exception("Insufficient balance.");
        }
        $this->balance -= $amount;
    }

    public function createTransaction($type, $amount) {
        return new ATMTransaction(uniqid(), date('Y-m-d H:i:s'), $type, $amount, $this->balance);
    }


    public function getNumber() {
        return $this->number;
    }

    public function getBalance() {
        return $this->balance;
    }
}

?>
