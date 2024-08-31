<?php

require_once 'Account.php';

class SavingAccount extends Account {

    public function __construct($number, $balance) {
        parent::__construct($number, $balance);
    }

    public function withdraw($amount) {
        parent::withdraw($amount); 
    }
}

?>
