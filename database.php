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

function quantityZero(){ //fonction qui retourne un tableau avec tous les produits dont il n'ya pas de stock
    $bddActivate = connectDatabase();
    $reponse = $bddActivate->prepare('SELECT *
                                        FROM products
                                        WHERE quantity=0');
    $reponse->execute();
return $reponse->fetchAll();
}

function ordersWithPrice(){
    $bddActivate = connectDatabase();
    $reponse = $bddActivate->prepare('SELECT orders.number, sum(products.price*order_product.quantity)
                                        FROM orders
                                        LEFT JOIN order_product ON (orders.id=order_product.order_id)
                                        LEFT JOIN products ON (products.id=order_product.product_id)
                                        GROUP BY orders.number');
    $reponse->execute();
    return $reponse->fetchAll();
}
?>

<h1>Requêtes de séléction sur 1 table</h1>
<div class="article-allProducts">
<h2>Fonction: allProducts</h2>

<?php
foreach (allProducts() as $donnees)
{
?>
<ul class='row col-4 list-group list-group-flush mx-auto mb-4 text-center'>
    <div style='border: 2px solid red; margin-bottom:50px; background-color: white;'>
    <li class='list-group-item'>
        <?= $donnees['name']; ?>
    </li>
    <li class='list-group-item'>
        <?= $donnees['description']; ?>
    </li>
    <li class='list-group-item d-flex text-center'>
        <p>Prix:</p><?= $donnees['price']; ?><p>€</p>
    </li>
    <li class='list-group-item bg-light'>
        <img src="<?= $donnees['image']?>" alt="baskettes" style="width:500px;height:500px;">
    </li>
    <div class="d-flex text-center">
    <li class='list-group-item col-6 d-flex'>
        <p>Poids:</p><?= $donnees['weight']; ?><p> g</p>
    </li>
    <li class='list-group-item col-6 d-flex'>
        <?= $donnees['quantity']; ?><p>disponible(s)</p>
    </li>
</div>
</div>
</ul>

<?php
}
?>
</div>

<div class="article-quantityZero">
    <h2>Fonction: quantityZero</h2>

    <?php
    foreach (quantityZero() as $donnees)
    {
     ?>

    <ul class='row col-4 list-group list-group-flush mx-auto mb-4 text-center'>
        <div style='border: 2px solid red; margin-bottom:50px; background-color: white;'>
        <li class='list-group-item'>
            <?= $donnees['name']; ?>
        </li>
        <li class='list-group-item'>
            <?= $donnees['description']; ?>
        </li>
        <li class='list-group-item d-flex text-center'>
            <p>Prix:</p><?= $donnees['price']; ?><p>€</p>
        </li>
        <li class='list-group-item'>
            <img src="<?= $donnees['image']?>" alt="baskettes" style="width:500px;height:500px;">
        </li>
        <div class="d-flex text-center">
        <li class='list-group-item col-6 d-flex'>
            <p>Poids:</p><?= $donnees['weight']; ?><p> g</p>
        </li>
        <li class='list-group-item col-6 d-flex'>
            <?= $donnees['quantity']; ?><p>disponible(s)</p>
        </li>
    </div>
    </div>
    </ul>
    <?php
}

     ?>
</div>

<div class="article-ordersWithPrice">
    <h2>Fonction: ordersWithPrice</h2>

    <?php
    foreach (ordersWithPrice() as $donnees)
    {
     ?>

    <ul class='row col-4 list-group list-group-flush mx-auto mb-4 text-center'>
        <div style='border: 2px solid red; margin-bottom:50px; background-color: white;'>
            <tr>
                <th>Number Order</th>
                <th>Date</th>
                <th>Price</th>
            </tr>
            <tr>
                <td>
                    <?= $donnees['number']; ?>
                </td>
                <td>
                    <?= $donnees['date']; ?>
                </td>
                <td>
                    <?= $donnees['price']; ?>
                </td>
            </tr>
    </div>
    </ul>
    <?php
}

     ?>
</div>
