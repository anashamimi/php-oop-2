<?php 
include __DIR__ . '/Accessory.php';
include __DIR__ . '/Food.php';
class Product{
    public
    $id, $name, $price, $nationality, $brand, $category, $image;

    public function __construct($id, $name, $nationality, $price, $brand, $category, $image) {
        $this->id = $id;
        $this->name = $name;
        $this->nationality = $nationality;
        $this->price = $price;
        $this->brand = $brand;
        $this->setCategoria($category);
        $this->image = $image;
    }

    public function setCategoria($category) {
        $allowedCategory = array("cane", "gatto");
        if (in_array($category, $allowedCategory)) {
            $this->category = $category;
        } else {
            return "no";
        }
    }  
    
    public function getFlag()
    {
        $flags = [
            'en' => './img/en.png',  
            'it' => './img/it.png', 
            'fr' => './img/fr.png', 
            'de' => './img/de.png', 
            
        ];
    
        if (array_key_exists($this->nationality, $flags)) {
            return $flags[$this->nationality];
        }
    
        return 'default';
    }
}


