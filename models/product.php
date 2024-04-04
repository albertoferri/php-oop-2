<?php

class Product {
    protected $titolo;
    protected $prezzo;
    protected $immagine;
    protected $category;

    public function __construct($titolo, $prezzo, Category $category) {
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->category = $category;
    }
    
    
}