<?php

    include('database.php');
    include('article.php');

    class Catalogue{

        public $tableauArticles = [];

        public function __construct(){
            foreach (allProducts() as $article) {
                $newArticle = new Article($article['name'], $article['description'], $article['price'], $article['picture'], $article['weight'], $article['quantity'], $article['available']);
                array_push($this->tableauArticles, $newArticle);
            }
        }

        function displayCat(){
            foreach ($this->tableauArticles as $article) {
                $article->displayArticle();
            }
        }
    }


 ?>
