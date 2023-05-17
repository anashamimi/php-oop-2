<?php

class Accessory extends Product{
    public
    $color, $material;

    public function __construct($id, $name, $nationality, $price, $brand, $category, $image, $color, $material) {
        parent::__construct($id, $name, $nationality, $price, $brand, $category, $image);
        $this->color = $color;
        $this->material = $material;
    }

    
}