<?php

class Category{
    public $name;
    public $icon;


    function __construct($name, $icon){
        $this->name = $name;
        $this->icon = $icon;

        // controlla che il prezzo fornito sia effettivamente una stringa
        if (!is_string($name)) {
            // se notiamo che sta succedendo qualcosa che non vorremmo lancia una eccezione
            throw new Exception("Il nome deve essere una stringa");
        }
    }
}