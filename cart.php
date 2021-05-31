<?php
include('header.php');
include('products.php');
 ?>

<h2 class="mb-4">Votre panier Mister/Miss !</h2>

<div class="row col-10 mx-auto bg-white text-center mb-4">
    <div class="col-5 p-2 border">
        <p>Article(s)</p>
        <div class="row">
            <img class="col-6" src="<?php echo $products[$_POST["article"]]["image"];?>" alt="adidas">
            <div class="col-6">

            <?php
            echo $products[$_POST["article"]]["nom"] . "<br>";
            echo $products[$_POST["article"]]["nom"]; // à faire : afficher pointure
            ?>
            </div>
        </div>
    </div>

    <div class="col-2 p-2 border">
        <p>Prix</p>
        <div class="">
            <?php
            //formatPrice(displayDiscountedPrice($products[$_POST["article"]]["prix"]["reduction"])) ; à faire : afficher prix remisé
            ?>
        </div>
    </div>

    <div class="col-1 p-2 border">
        <p>Quantité</p>
        <div class="">
            <?php
            //echo $products[$_POST["article"]]["quantite"]; à faire : afficher quantité
            ?>
        </div>
    </div>

    <div class="col-2 p-2 border">
        <p>Poids</p>
        <div class="">
            <?php
            echo $products[$_POST["article"]]["poids"] . " g";
            ?>
        </div>
    </div>

    <div class="col-2 p-2 border">
        <p>Total</p>
        <div class="">
        </div>
    </div>
</div>

<?php
include('footer.php');
 ?>
