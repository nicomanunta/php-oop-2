<?php
    require_once __DIR__."/Prodotto.php";

    // sottoclasse GIOCO
    class Gioco extends Prodotto{
        public $materiale;

        function __construct($_nome, $_prezzo, $_img, Categoria $_categoria, $_materiale){
            parent::__construct($_nome, $_prezzo, $_img, $_categoria);
            $this -> materiale = $_materiale;
        }
        public function getMateriale(){
            return $this -> materiale;
        }
        
    }
?>
