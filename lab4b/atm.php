<?php

class ATM {
    private $location;
    private $managedBy; // Reference to Bank

    public function __construct($location, Bank $managedBy) {
        $this->location = $location;
        $this->managedBy = $managedBy;
    }

    public function identifies(Customer $customer) {
        // Logic to identify customer using card number and PIN
    }

    public function transactions(Account $account, $amount, $type) {
        if ($type == 'deposit') {
            $account->deposit($amount);
        } elseif ($type == 'withdraw') {
            $account->withdraw($amount);
        }
    }


    public function getLocation() {
        return $this->location;
    }

    public function getManagedBy() {
        return $this->managedBy;
    }
}

?>
