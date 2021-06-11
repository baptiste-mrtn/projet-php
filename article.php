<?php
    class Article{ //je crée ma classe Article
        public $nom; //je crée mes variables correspondant aux caracteristiques de mon article
        public $description;
        public $prix;
        public $image;
        public $poids;
        public $stock;
        public $disponible;

        public function __construct($nom, $description, $prix, $image, $poids, $stock, $disponible){ //fonction qui construit et prend en parametre mes variables précédentes
            $this->nom=$nom; //la valeur de ma variable correspond à la variable écrite (la valur de nom = $nom)
            $this->description=$description;
            $this->prix=$prix;
            $this->image=$image;
            $this->poids=$poids;
            $this->stock=$stock;
            $this->disponible=$disponible;
        }

        public function displayArticle(){ //fonction qui affiche mon article
            ?>
            <div class='text-light'>
                <ul class='row col-4 list-group list-group-flush mx-auto mb-4 text-center' style='border: 2px solid red; margin-bottom:50px;'>
                    <li class='list-group-item'>Article: <?=$this->nom ?></li>
                    <li class='list-group-item'>Description: <?=$this->description?></li>
                    <li class='list-group-item'>Prix: <?=$this->prix?>€</li>
                    <li class='list-group-item'><img alt='' src='<?=$this->image?>'></li>
                    <li class='list-group-item'>Poids: <?=$this->poids?>g</li>
                    <li class='list-group-item'>Stock: <?=$this->stock?></li>
                    <li class='list-group-item'>Disponible: <?php if($this->disponible == 1){echo "oui";}else{echo "non";}?></li>
                </ul>
            </div>
            <?php
            }
    }


 ?>
