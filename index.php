<!-- php-oop-magazzino -->

<!-- Crea e modella classi, a piacere, per gestire i prodotti di un magazzino. -->

<?php

    require_once 'classes/product.php';
    require_once 'classes/Tech.php';

    $prodotto1 = new Product('matita',24,'A02D13','descrizione matita',9781108539333,FALSE,96);

    var_dump($prodotto1);

    $prodotto1->piecesForColli();

    $prodotto1->Ubication();

    $prodotto1->getIsbn();

    $prodotto1Tech = new Tech('matita',24,'A02D13','descrizione matita',9781108539333,true,96,0.50,'giallo','cartoleria','4326','Bic');

    var_dump($prodotto1Tech);

    $prodotto1Tech->priceForQuantity();
