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


// cibo per cani
$crocchetteManzo = new Food("Crocchette Manzo e Verdure", 7, $dogCategory, "manzo, verdure", "12/24");
$crocchetteManzo->setImage("https://www.lasorgente.net/594023-large_default/pedigree-crocchette-manzo-e-verdure-kg14-adult-mini.jpg");

$snackDental = new Food("Snack Dental per Cani", 3, $dogCategory, "pollo, riso", "10/24");
$snackDental->setImage("https://iperdrive.iper.it/wcsstore/FiniperCatalogAssetStore/asset/images/3074457345616701602/3074457345616701602_FULL_main.jpg");

// Cibo per Gatti
$umidoSalmone = new Food("Umido Salmone e Trota", 5, $catCategory, "salmone, trota", "11/24");
$umidoSalmone->setImage("https://www.epocaitalpigeon.com/10942-thickbox_default/edgard-cooper-salmon-trout-cibo-umido-grain-free-per-cane-da-400-gr-con-salmone-e-trota.jpg");

$crocchetteWhis = new Food("Crocchette Whiskas", 5, $catCategory, 'pollo', '10/24');
$crocchetteWhis->setImage('https://media.dm-static.com/images/f_auto,q_auto,c_fit,h_1200,w_1200/v1700340160/products/pim/5900951283734_B1_ITA/whiskas-croccantini-per-gatti-adulti-con-tonno');

$snackErbaGatta = new Food("Snack con Erba Gatta", 2, $catCategory, "erba gatta", "09/24");
$snackErbaGatta->setImage("https://arcaplanet.vtexassets.com/arquivos/ids/279283/Catisfaction_ErbaGatta_60g.jpg?v=638103406410870000");


// giocattoli per cani
$pallinaRetata = new Toy("Pallina Retata", 2, $dogCategory, "Gomma");
$pallinaRetata->setImage("https://www.canibo.it/wp-content/uploads/2018/10/pallina-retata-per-cani.jpg");

$ossoGomma = new Toy("Osso in Gomma Resistente", 4, $dogCategory, "gomma");
$ossoGomma->setImage("https://www.zooexpert.it/784-thickbox_default/osso-in-gomma-cpunte-16cm.jpg");

$frisbeeNylon = new Toy("Frisbee in Nylon per Cani", 6, $dogCategory, "nylon");
$frisbeeNylon->setImage("https://m.media-amazon.com/images/I/71bjtPw1yLL.jpg");

// Giocattoli per Gatti
$topoPeloso = new Toy("Topolino Peloso con Corda", 3, $catCategory, "pelliccia, corda");
$topoPeloso->setImage("https://images-eu.ssl-images-amazon.com/images/I/717iYEcTpwL._AC_UL600_SR600,600_.jpg");

$tiragraffiCartone = new Toy("Tiragraffi in Cartone", 8, $catCategory, "cartone, legno");
$tiragraffiCartone->setImage("https://www.byaldino.com/wp-content/uploads/2021/01/35BB6B5A-8D4E-418D-89F2-DDB95BAD4BAA_1_105_c.jpeg");


// cuccia per cani
$cucciaChiara = new Kennel("Cuccia 'House'", 10, $dogCategory, "medium", "plastica");
$cucciaChiara->setImage("https://arcaplanet.vtexassets.com/arquivos/ids/227610/p-a-y--cuccia-alcazar-70.jpg?v=637454794658030000");

$cucciaMorbida = new Kennel("Cuccia Morbida con Cuscino", 15, $dogCategory, "medium", "morbido tessuto");
$cucciaMorbida->setImage("https://m.media-amazon.com/images/I/51f4UqkDPdL._AC_.jpg");

$cucciaIgloo = new Kennel("Cuccia Igloo in Plastica", 20, $dogCategory, "medium", "plastica");
$cucciaIgloo->setImage("https://caldaiemurali.it/cdn/shop/products/immagine-2-easycomfort-easycomfort-cuccia-da-esterno-per-cani-di-taglia-piccola-a-forma-di-igloo-con-porta-ean-8055776915241.jpg?v=1695984522");

// Cucce per Gatti

$lettoSoffitto = new Kennel("Letto a Soffitto per Gatti", 12, $catCategory, "medium", "tessuto, metallo");
$lettoSoffitto->setImage("https://i.etsystatic.com/21419403/r/il/1c89a5/3702082059/il_570xN.3702082059_72s2.jpg");

$tiragraffiColonna = new Kennel("Tiragraffi a Colonna con Cuscino", 18, $catCategory, "large", "cartone, cotone, corda");
$tiragraffiColonna->setImage("https://m.media-amazon.com/images/I/51kyKoeiQYL._AC_UF894,1000_QL80_.jpg");

$products = [
    $crocchetteWhis,
    $snackDental,
    $umidoSalmone,
    $snackErbaGatta,
    $pallinaRetata,
    $ossoGomma,
    $frisbeeNylon,
    $topoPeloso,
    $tiragraffiCartone,
    $cucciaChiara,
    $cucciaMorbida,
    $cucciaIgloo,
    $lettoSoffitto,
    $tiragraffiColonna
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
        <div class="row my-5 d-flex justify-content-center">
            <h1 class="display-1 col-12 text-center mb-5 text-success fw-bold ">PET-SHOP <i class="fa-solid fa-paw"></i></h1>
            <h2 class="mb-5">Prodotti per animali</h2>
            <div class="row row-cols-2 row-cols-lg-3  d-flex flex-wrap row-gap-3 px-0">
            <?php
            foreach($products as $product) {
                ?>
                <div class="col px-2">
                    <div class="card h-100">
                        <img src="<?= $product->immagine ?>" class="card-img-top object-fit-cover w-100" alt="<?= $product->titolo ?>" style="height: 300px;">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-between ">
                                <span><?= $product->titolo ?></span>
                                <span><i class="fa-solid <?= $product->category->icon ?>"></i></span>
                            </h5>
                            <h6 class="text-secondary"><small>(<?= $product->getType() ?>)</small></h6>
                            <p class="card-text">€<?= $product->prezzo ?></p>
                            <a href="#" class="btn btn-success fw-bold mb-2">Acquista</a>

                            <div class="details">
                            <ul class="list-unstyled ">
                                <?php
                                echo '<hr>';
                                echo '<li class="mt-3 fw-bold fs-5">Dettagli</li>';

                                // controlliamo di che tipo sia il prodotto
                                if($product instanceof Food) {
                                    echo '<li class="mt-1">Ingredienti: ' . $product->ingredient . '</li>' ;
                                    echo '<li>Scadenza: ' . $product->expireDate . '</li>' ;

                                } else if($product instanceof Kennel) { 

                                    echo '<li class="mt-1"><strong>Taglia: </strong>'. $product->size . '</li>';
                                    echo '<li class="mt-1">Materiale: '. $product->material . '</li>';

                                } else if($product instanceof Toy) {

                                    echo '<li class="mt-1">Materiale: ' . $product->material . '</li>' ;

                                }


                                ?>
                            </ul>
                        </div>
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