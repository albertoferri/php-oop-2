
<?php

require_once __DIR__ . '/Product.php';
class Kennel extends Product {

    public $size;
    
    /**
     * __construct
     *
     * @param  string $name
     * @param  float $price
     * @param  Category $category
     * @param  string $size
     */
    function __construct($name, $price, Category $category, $size) {
        parent::__construct($name, $price, $category);
        $this->size = $size;
    }

}
