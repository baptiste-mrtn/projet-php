    <?php
    require_once("header.php");
    require_once("catalogs/my-functions.php");
    require_once("database.php");
    ?>

    <h1>Changement de la BDD</h1>

    <h2 class="mb-4">Ajout d'un produit</h2>

    <form class="mx-auto mb-4" method="post" action="view.php">
            <input type="text" name="name" placeholder="Nom du produit"></input>
            <input type="text" name="description" placeholder="Description"></input>
            <input type="number" name="price" placeholder="Prix (centimes)" min=0></input>
            <input type="text" name="picture" placeholder="URL de l'image"></input>
            <input type="number" name="weight" placeholder="Poids (g)"></input>
            <input type="number" name="quantity" placeholder="Quantité"></input>
            <label class="text-light" for="available">Disponible:</label>
            <select type="number" name="available">
                <option value="0">Non</option>
                <option value="1">Oui</option>
            </select>
            <label class="text-light" for="category_id">Catégorie:</label>
            <select type="number" name="category_id" placeholder="Categorie">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select><br>
            <button type="submit" name="ajouter" id="ajouter" value="ajouter">Envoyer</button>
    </form>

<?php

include("footer.php");
?>
