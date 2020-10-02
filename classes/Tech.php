<?php

    require_once 'classes/product.php';

    class Tech extends Product {
        
        public $prezzo;
        public $colore;
        public $genere;
        public $cod_art;
        public $marchio;

        public function __construct($_nome,$n__Colli,$_ubicazione,$descrizione,$_isbn,$is__used,$_quantita = 0,$_prezzo,$_colore = NULL,$_genere,$cod__art,$_marchio) {

            parent::__construct($_nome,$n__Colli,$_ubicazione,$descrizione,$_isbn,$is__used,$_quantita);
            $this->prezzo = $_prezzo;
            $this->colore = $_colore;
            $this->genere = $_genere;
            $this->cod_art = $cod__art;
            $this->marchio = $_marchio;           

        }

        public function priceForQuantity() {

            echo "Quantità $this->quantita| Prezzo ad unità = $this->prezzo| Prezzo Totale = ". $this->prezzo * $this->quantita."€";

        }

    }