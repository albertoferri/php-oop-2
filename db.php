<?php

require_once './Models/Category.php';
require_once './Models/Product.php';
require_once './Models/Food.php';
require_once './Models/Toy.php';
require_once './Models/Kennel.php';

// creiamo le categorie
$catCategory = new Category("Gatti", "fa-cat");
$dogCategory = new Category("Cani", "fa-dog");



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


// gestione errore try & catch
$error = null;

try {
    // qui scriviamo il codice "a rischio"
    $category = new Category(100, "fa-dragon");
} catch (Exception $e) {
    // mi salvo l'errore generato in una variabile che poi mi preoccuperò di mostrare in pagina
    echo $e->getMessage();
}