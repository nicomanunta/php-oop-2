<?php
    // classe CATEGORIA da incapsulare 
    class Categoria{
        public $animale;

        function __construct($_animale){
            $this-> animale = $_animale;
        }
    }

    $cane = new Categoria("<i class='fa-solid fa-dog' style='color: black;'></i>");
    $gatto = new Categoria("<i class='fa-solid fa-cat' style='color: black;'></i>");
    $uccelli = new Categoria("<i class='fa-solid fa-crow' style='color: black;'></i>");
    $pesci = new Categoria("<i class='fa-solid fa-fish' style='color: black;'></i>");

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
    
    
    
    
    $gioco_1 = new Gioco("Kong Classic", "6.90", "<img src='https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg' alt=''>", $cane, "Plastica");
    $gioco_2 = new Gioco("Topino Trixie", "10.90", "<img src='https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg' alt=''>", $gatto, "Peluche");
    
    $cibo_1 = new Cibo("Royal Canin Mini Adult", "15.90", "<img src='https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000' alt=''>", $cane, "Secco");
    $cibo_2 = new Cibo("Almo Nature Holistic Maintenance Medium Large Tonno e Riso", "12.90", "<img src='https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg' alt=''>", $cane, "Secco");
    $cibo_3 = new Cibo("Almo Nature Cat Daily Lattina", "16.90", "<img src='https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg' alt=''>", $gatto, "Liquido");
    $cibo_4 = new Cibo("Mangime per Pesci Guppy in Fiocchi", "8.90", "<img src='https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg' alt=''>", $pesci, "Secco");
    
    $accessorio_1 = new Accessorio("Voliera Wilma in Legno", "60", "<img src='https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg' alt=''>", $uccelli,  "100-60-50cm");
    $accessorio_2 = new Accessorio("Cartucce Filtranti per Filtro EasyCrystal", "19.90", "<img src='https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg' alt=''>", $pesci, " vasche max 60l");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <h1>Cibo</h1>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <?php echo $cibo_1-> getImg();?>
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4"> <?php echo $cibo_1-> getNome(); ?></h5>
                        <p class="card-text text-center"><?php echo "Tipo: ".$cibo_1-> getTipo()." ".$cibo_1-> getCategoria(); ?></p>
                        <p class="card-text text-center"><?php echo "Prezzo: ".$cibo_1->getPrezzo()."€"; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <?php echo $cibo_2-> getImg();?>
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4"> <?php echo $cibo_2-> getNome(); ?></h5>
                        <p class="card-text text-center"><?php echo "Tipo: ".$cibo_2-> getTipo()." ".$cibo_2-> getCategoria(); ?></p>
                        <p class="card-text text-center"><?php echo "Prezzo: ".$cibo_2->getPrezzo()."€"; ?></p>
               
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <?php echo $cibo_3-> getImg();?>
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4"> <?php echo $cibo_3-> getNome(); ?></h5>
                        <p class="card-text text-center"><?php echo "Tipo: ".$cibo_3-> getTipo()." ".$cibo_3-> getCategoria(); ?></p>
                        <p class="card-text text-center"><?php echo "Prezzo: ".$cibo_3->getPrezzo()."€"; ?></p>
               
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <?php echo $cibo_4-> getImg();?>
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4"> <?php echo $cibo_4-> getNome(); ?></h5>
                        <p class="card-text text-center"><?php echo "Tipo: ".$cibo_4-> getTipo()." ".$cibo_4-> getCategoria(); ?></p>
                        <p class="card-text text-center"><?php echo "Prezzo: ".$cibo_4->getPrezzo()."€"; ?></p>
               
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <h1>Giochi</h1>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <?php echo $gioco_1-> getImg();?>
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4"> <?php echo $gioco_1-> getNome(); ?></h5>
                        <p class="card-text text-center"><?php echo "Materiale: ".$gioco_1-> getMateriale()." ".$gioco_1-> getCategoria(); ?></p>
                        <p class="card-text text-center"><?php echo "Prezzo: ".$gioco_1->getPrezzo()."€"; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <?php echo $gioco_2-> getImg();?>
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4"> <?php echo $gioco_2-> getNome(); ?></h5>
                        <p class="card-text text-center"><?php echo "Materiale: ".$gioco_2-> getMateriale()." ".$gioco_2-> getCategoria(); ?></p>
                        <p class="card-text text-center"><?php echo "Prezzo: ".$gioco_2->getPrezzo()."€"; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <h1>Accessori</h1>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <?php echo $accessorio_1-> getImg();?>
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4"> <?php echo $accessorio_1-> getNome(); ?></h5>
                        <p class="card-text text-center"><?php echo "Dimensioni: ".$accessorio_1-> getDimensioni()." ".$accessorio_1-> getCategoria(); ?></p>
                        <p class="card-text text-center"><?php echo "Prezzo: ".$accessorio_1->getPrezzo()."€"; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <?php echo $accessorio_2-> getImg();?>
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4"> <?php echo $accessorio_2-> getNome(); ?></h5>
                        <p class="card-text text-center"><?php echo "Dimensioni: ".$accessorio_2-> getDimensioni()." ".$accessorio_2-> getCategoria(); ?></p>
                        <p class="card-text text-center"><?php echo "Prezzo: ".$accessorio_2->getPrezzo()."€"; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
