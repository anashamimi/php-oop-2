<?php

class Food extends Product{
    public 
    $expirationDate;

    public function __construct($id, $name, $nationality, $price, $brand, $category, $expirationDate) {
        parent::__construct($id, $name, $nationality, $price, $brand, $category);
        $this->expirationDate = $expirationDate;
    }
}