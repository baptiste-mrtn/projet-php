<?php

    function connectDatabase(){ //fonction qui connecte la BDD
    try{$bdd = new PDO('mysql:host=localhost;dbname=dump;charset=utf8', 'baptiste_martin', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));}
    catch (Exception $e){die('Erreur : ' . $e->getMessage());}
    return $bdd;
    }

    function allProducts(){ //fonction qui retourne un tableau avec tous les produits
        $bddActivate = connectDatabase();
        $reponse = $bddActivate->prepare('SELECT * FROM products');
        $reponse->execute();
    return $reponse->fetchAll();
    }

    include("article.php");


    class Catalogue{
        private $bdd = allProducts();
        private array $leTableau = [$bdd];


        public function __construct($bdd)
        {
            $this->bdd = $bdd;
            var_dump($bdd);
        }

        public function addArticle(Article $article) {
            array_push($this->article, $article);
        }

        public function getArticle(){
            return $this->article;
        }

        public function fromCustomerOrder(array $leTableau) {
            foreach ($articles as $article) {
                $drink = new SoftDrink($boisson["name"]);
                $glass = new Glass($boisson["size"]);
                $glass->fill($drink);

                $this->addGlass($glass);
            }
        }

    }

 ?>
