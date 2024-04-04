<?php

require_once './models/traits/materiables.php';


class Toy extends Product {
    
    use Materiables; 
    
    
    /**
     * __construct
     *
     * @param  string $name
     * @param  float $price
     * @param  Category $category
     * @param  string $material
     */


    function __construct($name, $price, Category $category, $material) { 

        parent::__construct($name, $price, $category);
        $this->material = $material;
        
        $this->type = "Gioco";
    }
}