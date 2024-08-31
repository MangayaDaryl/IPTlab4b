<?php

class ATMTransaction {
    private $transactionId;
    private $date;
    private $type;
    private $amount;
    private $postBalance;

    public function __construct($transactionId, $date, $type, $amount, $postBalance) {
        $this->transactionId = $transactionId;
        $this->date = $date;
        $this->type = $type;
        $this->amount = $amount;
        $this->postBalance = $postBalance;
    }

    public function modifies(Account $account, $amount) {
       
    }

 
    public function getTransactionId() {
        return $this->transactionId;
    }

    public function getDate() {
        return $this->date;
    }

    public function getType() {
        return $this->type;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function getPostBalance() {
        return $this->postBalance;
    }
}

?>
