<?php

require_once __DIR__ . '/product.php';

class Food extends Product{

    public $ingredient;
    public $expireDate;
    public function __construct($titolo, $prezzo, Category $category, $expireDate, $ingredient){
        parent::__construct($titolo, $prezzo, $category);
        $this->expireDate = $expireDate;
        $this->ingredient = $ingredient;
        
        $this->type = 'Cibo';
    }
}