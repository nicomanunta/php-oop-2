<?php
    // classe CATEGORIA da incapsulare 
    class Categoria{
        public $animale;

        function __construct($_animale){
            $this-> animale = $_animale;
        }
    }

    $cane = new Categoria("Cane");
    $gatto = new Categoria("Gatto");
    $uccelli = new Categoria("Uccelli");
    $pesci = new Categoria("Pesci");

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
    
    
    
    
    $gioco_1 = new Gioco("Kong Classic", 6.90, "<img src='https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg' alt=''>", $cane, "Plastica");
    $gioco_2 = new Gioco("Topino Trixie", 10.90, "<img src='https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg' alt=''>", $gatto, "Peluche");
    
    $cibo_1 = new Cibo("Royal Canin Mini Adult", 15.90, "<img src='https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000' alt=''>", $cane, "Secco");
    $cibo_2 = new Cibo("Almo Nature Holistic Maintenance Medium Large Tonno e Riso", 12.90, "<img src='https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg' alt=''>", $cane, "Secco");
    $cibo_3 = new Cibo("Almo Nature Cat Daily Lattina", 16.90, "<img src='https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg' alt=''>", $pesci, "Secco");
    
    $accessorio_1 = new Accessorio("Voliera Wilma in Legno", 60, "<img src='https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg' alt=''>", $uccelli,  "100-60-50cm");
    $accessorio_2 = new Accessorio("Cartucce Filtranti per Filtro EasyCrystal", 19.90, "<img src='https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg' alt=''>", $pesci, "Per vasche max: 60l");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <!-- <img src='' alt=''> -->
    <?php
    echo $gioco_1-> getInfo();
    echo $gioco_2-> getInfo();
    echo $cibo_1-> getInfo();
    echo $cibo_2-> getInfo();
    echo $cibo_3-> getInfo();
    echo $accessorio_1-> getInfo();
    echo $accessorio_2-> getInfo();
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" style="width: 18rem;">
                    <?php echo ?>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
