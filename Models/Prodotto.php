<?php
    require_once __DIR__."/Categoria.php";

    // classe PRODOTTO
    class Prodotto{
        public $nome;
        public $prezzo;
        public $img;
        public $categoria;


        function __construct($_nome, $_prezzo, $_img, Categoria $_categoria){
            $this-> nome = $_nome;
            $this-> prezzo = $_prezzo;
            $this-> img = $_img;
            $this -> categoria = $_categoria;
        }
        public function getNome(){
            return $this -> nome;
        }
        public function getPrezzo(){
            return $this -> prezzo; 
        }
        public function getImg(){
            return $this -> img;
        }
        public function getCategoria(){
            return $this -> categoria -> animale;
        }
        
         
    }
?>
