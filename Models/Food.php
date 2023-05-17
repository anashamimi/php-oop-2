<?php

class Food extends Product{
    public 
    $expirationDate, $weight;

    public function __construct($id, $name, $nationality, $price, $brand, $category, $image, $expirationDate, $weight) {
        parent::__construct($id, $name, $nationality, $price, $brand, $category, $image);
        $this->expirationDate = $expirationDate;
        $this->weight = $weight;
    }
}