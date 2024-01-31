<?php
    require_once __DIR__."/Prodotto.php";

    // sottoclasse ACCESSORIO
    class Accessorio extends Prodotto{
        public $dimensioni;
        
        function __construct($_nome, $_prezzo, $_img, Categoria $_categoria, $_dimensioni){
            parent::__construct($_nome, $_prezzo, $_img, $_categoria);
            $this-> dimensioni = $_dimensioni;
        }
        public function getDimensioni(){
            return $this -> dimensioni;
        }
      
    }
?>