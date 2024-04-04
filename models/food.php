<?php

require_once __DIR__ . '/product.php';

class Food extends Product{

    public $ingredient;
    public $expireDate;
    public function __construct($titolo, $prezzo, Category $category, $ingredient, $expireDate){
        parent::__construct($titolo, $prezzo, $category);
        $this->ingredient = $ingredient;
        $this->expireDate = $expireDate;

        $this->type = 'Cibo';
    }
}