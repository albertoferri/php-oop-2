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
$crocchette = new Food("Crocchette Whiskas", 5, $catCategory, 'pollo', '10/24');
$crocchette->setImage('https://media.dm-static.com/images/f_auto,q_auto,c_fit,h_1200,w_1200/v1700340160/products/pim/5900951283734_B1_ITA/whiskas-croccantini-per-gatti-adulti-con-tonno');

// giocattolo
$pallina = new Toy("Pallina Retata", 2, $dogCategory, "Gomma");
$pallina->setImage("https://www.canibo.it/wp-content/uploads/2018/10/pallina-retata-per-cani.jpg");

// cuccia
$cuccia = new Kennel("Cuccia 'House'", 10, $dogCategory, "medium");
$cuccia->setImage("https://arcaplanet.vtexassets.com/arquivos/ids/227610/p-a-y--cuccia-alcazar-70.jpg?v=637454794658030000");

$products = [
    $crocchette,
    $pallina,
    $cuccia
];


?>


<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-oop-2</title>
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    
    <div class="container">
        <div class="row my-5">
            <h1 class="col-12 text-center">PHP-oop-2</h1>
            <h2 class="mb-5 px-4">Prodotti per animali</h2>
            <div class="col d-flex flex-wrap row-gap-3 ">
            <?php
            foreach($products as $product) {
                ?>
                <div class="col px-2">
                    <div class="card">
                        <img src="<?= $product->immagine ?>" class="card-img-top object-fit-cover w-100" alt="<?= $product->titolo ?>" style="height: 300px;">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-between ">
                                <span><?= $product->titolo ?></span>
                                <span><i class="fa-solid <?= $product->category->icon ?>"></i></span>
                            </h5>
                            <h6 class="text-secondary"><small>(<?= $product->getType() ?>)</small></h6>
                            <p class="card-text">€<?= $product->prezzo ?></p>
                            <a href="#" class="btn btn-success fw-bold">Acquista</a>
                        </div>
                    </div>
                </div>
                <?php
            }

            ?>
            </div>
        </div>
    </div>




    <!-- link bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>