<?php

require_once './Models/Category.php';
require_once './Models/Product.php';
require_once './Models/Food.php';
require_once './Models/Toy.php';
require_once './Models/Kennel.php';

// creiamo le categorie
$catCategory = new Category("Gatti", "fa-cat");
$dogCategory = new Category("Cani", "fa-dog");


// creo un prodotto
$newProduct = new Product("Pallina", 2.30, $dogCategory);

// var_dump($newProduct);


// cibo
$crocchette = new Food("Crocchette Crock", 3.14, $catCategory, 'pesce', '10/24');

// giocattolo
$pallina = new Toy("Pallina Pally", 1, $dogCategory, "Gomma");

// cuccia
$cuccia = new Kennel("Cuccia Blu", 7, $dogCategory, "medium");

// var_dump($cuccia);


?>


<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-oop-2</title>
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    
    <div class="container">
        <div class="row my-5">
            <h1 class="col-12 text-center">PHP-oop-2</h1>
            <h2 class="mb-5 px-4">Prodotti per animali</h2>
            <div class="col d-flex flex-wrap list-unstyled row-gap-3 ">
            
            </div>
        </div>
    </div>




    <!-- link bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>