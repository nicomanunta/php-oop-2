<?php
    require_once __DIR__."/Prodotto.php";

    // sottoclasse CIBO
    class Cibo extends Prodotto{
        public $tipo;
        
        function __construct($_nome, $_prezzo, $_img, Categoria $_categoria, $_tipo){
            parent::__construct($_nome, $_prezzo, $_img, $_categoria);
            $this -> tipo = $_tipo;
        }
        public function getTipo(){
            return $this -> tipo;
        }
       
    }
?>
