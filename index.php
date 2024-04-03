<?php

// Classe base per i prodotti
class Prodotto {
    protected $titolo;
    protected $prezzo;
    protected $immagine;
    protected $categoria;
    
    public function getDettagliProdotto() {
        return 'Titolo: ' . $this->titolo . '<br>' .
               'Prezzo: ' . $this->prezzo . '<br>' .
               'Categoria: ' . $this->categoria;
    }
}

require './Models/cat.php';
require './Models/dog.php';

// Classe per la card del prodotto
class CardProdotto {
    private $prodotto;

    public function __construct(Prodotto $prodotto) {
        $this->prodotto = $prodotto;
    }

    public function stampa() {
        echo '<div class="card" style="width: 18rem;">';
        echo '<div class="card-body">';
        echo $this->prodotto->getDettagliProdotto();
        echo '</div>';
        echo '</div>';
    }
}

$prodottoCane = new Prodotto("Giocattolo per cani", 10.99, "url_immagine", "Cani");
$prodottoGatto = new Prodotto("Giocattolo per gatti", 8.99, "url_immagine", "Gatti");


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
            <?php
            // Creazione di un array di prodotti
            $prodotti = array($prodottoCane, $prodottoGatto);

            foreach($prodotti as $prodotto) {
                $cardProdotto = new CardProdotto($prodotto);
                echo '
                <div class="col-12 col-md-6 col-lg-3 px-3">
                    <div class="card">';
                $cardProdotto->stampa();
                echo '
                    </div>
                </div>';
            }
            ?>
            </div>
        </div>
    </div>



    <!-- link bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>