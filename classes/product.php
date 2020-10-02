<?php

    class Product {
        
        public $nome;
        public $n_Colli;
        public $descrizione;
        public $is_used;
        public $quantita;
        public $ubicazione;
        public $isbn;

        public function __construct($_nome,$n__Colli,$_ubicazione,$descrizione,$_isbn,$is__used = FALSE,$_quantita = 0) {

            $this->nome = $_nome;
            $this->n_Colli = $n__Colli;
            $this->descrizione = $descrizione;
            $this->isbn = $_isbn;
            $this->is_used = $is__used;
            $this->quantita = $_quantita;
            $this->ubicazione = $_ubicazione;

        }

        public function piecesForColli() {

            $result = $this->quantita / $this->n_Colli;

            if (is_float($result)) {
                echo "N.pezzi per collo = ".floor($result)." (un collo è aperto)";
            } else {
                echo "N.pezzi per collo = $result";
            }

            
        }

        public function Ubication() {

            $ubicazione = $this->ubicazione;

            if (strlen($ubicazione) <> 6 OR is_numeric($ubicazione)) {
                die('operazione non eseguibile');
            }

            $magazzino = $ubicazione[0];
            $area = substr($ubicazione,1,2);
            $corridoio = substr($ubicazione,3,2);
            $scaffale = $ubicazione[5];

            echo "Prodotto situato in [magazzino: $magazzino],[area: $area],[corridoio: $corridoio],[scaffale: $scaffale]";

        }

        public function getIsbn() {
            echo $this->isbn;
        }

    }