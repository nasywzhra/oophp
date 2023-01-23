<?php
class Customer{
    private $firstName = "Nasywa";
    private $lastName = "Zahra";

    public function __call($first, $last){
        $this->firstName = $first;
        $this->lastName = $last;
    }
}

$customer = new Customer;
var_dump($customer);