<?php

require './db.php';

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
                    <div class="card">
                        <img src="<?= $product->immagine ?>" class="card-img-top object-fit-cover w-100" alt="<?= $product->titolo ?>" style="height: 300px;">
                        <div class="card-body" style="min-height: 300px;">
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