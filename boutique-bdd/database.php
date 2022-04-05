<?php
function connectDatabase(){ //fonction qui connecte la BDD
try{$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'baptiste_martin', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));} //code qui permet de se connecter à la bdd
catch (Exception $e){die('Erreur : ' . $e->getMessage());} //si il y'a erreur, affiche un message
return $bdd; //renvoi la bdd
}


function allProducts(){ //fonction qui retourne un tableau avec tous les produits
    $bddActivate = connectDatabase(); //variable correspondant à la connexion à la bdd
    $reponse = $bddActivate->prepare('SELECT * FROM products'); //prépare la requete SQL demandant tout mes produits
    $reponse->execute(); //execute la requête
return $reponse->fetchAll(PDO::FETCH_ASSOC); //renvoi la reponse qui contient toutes les lignes du resultat de ma requête SQL
}

function allCustomers(){
    $bddActivate = connectDatabase(); //variable correspondant à la connexion à la bdd
    $reponse = $bddActivate->prepare('SELECT * FROM customers'); //prépare la requete SQL demandant tout mes clients
    $reponse->execute(); //execute la requête
return $reponse->fetchAll(); //renvoi la reponse qui contient toutes les lignes du resultat de ma requête SQL
}