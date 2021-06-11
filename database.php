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
?>
