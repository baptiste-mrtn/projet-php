<?php

    require_once('database.php');
    include('article.php');

    class Catalogue{

        public $tableauArticles = []; //je crée un tableau vide

        public function __construct(){ //ma fonction qui va construire
            foreach (allProducts() as $article) { //pour chaque fonction qui prend tout les produits de ma BDD en tant qu'article
                $newArticle = new Article($article['name'], $article['description'], $article['price'], $article['picture'], $article['weight'], $article['quantity'], $article['available']); //je crée une variable qui est un objet Article et qui en paramètre correspond aux caracteristiques de mon article
                array_push($this->tableauArticles, $newArticle);//j'envoi ce tableau tableauArticles qui contient les newArticle
            }
        }

        function displayCat(){ //fonction qui affiche le catalogue
            foreach ($this->tableauArticles as $article) { //pour chaque article de mon tableau
                $article->displayArticle(); //appel de la fonction qui affiche l'article
            }
        }
    }


 ?>
