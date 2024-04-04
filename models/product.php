<?php

class Product {
    public $titolo;
    public $prezzo;
    public $immagine;
    public $category;
    protected $type;

    public function __construct($titolo, $prezzo, Category $category) {
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->category = $category;
    }
    
    public function setImage($image) {
        $this->immagine = $image;
    }


    public function getType() {
        return $this->type;
    }
}