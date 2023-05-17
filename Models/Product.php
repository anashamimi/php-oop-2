<?php 
include __DIR__ . '/Accessory.php';
include __DIR__ . '/Food.php';
class Product{
    public
    $id, $name, $price, $nationality, $brand, $category;

    public function __construct($id, $name, $nationality, $price, $brand, $category) {
        $this->id = $id;
        $this->name = $name;
        $this->nationality = $nationality;
        $this->price = $price;
        $this->brand = $brand;
        $this->setCategoria($category);
    }

    public function setCategoria($category) {
        $allowedCategory = array("cane", "gatto");
        if (in_array($category, $allowedCategory)) {
            $this->category = $category;
        } else {
            return "no";
        }
    }    
}


