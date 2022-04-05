<?php
include('header.php');
include('products.php');
require_once('my-functions.php');

?>
<section class="panier">
    <h2 class="mb-4">Votre panier Mister/Miss !</h2>
    <?php
    $quantity = $_POST["quantite"];
    if ($quantity != 0) {
    ?>
    <div class="article-panier row col-10 mx-auto bg-white text-center mb-4">
        <div class="col-5 p-2 border">
            <p>Article(s)</p>
            <div class="row">
                <img class="col-6" src="<?php echo $products[$_POST["article"]]["image"]; ?>" alt="adidas">
                <div class="col-6">

                    <?php
                        echo $products[$_POST["article"]]["nom"] . "<br>";
                        echo "Pointure: " . $_POST["pointure"];
                        ?>
                </div>
            </div>
        </div>

        <div class="col-2 p-2 border">
            <p>Prix</p>
            <div class="">
                <?php
                    $price = $products[$_POST["article"]]["prix"];
                    $reduce = $products[$_POST["article"]]["reduction"];
                    $discountedPrice = formatPrice(displayDiscountedPrice($price, $reduce));
                    echo $discountedPrice . "€";
                    ?>
            </div>
        </div>

        <div class="col-1 p-2 border">
            <p>Quantité</p>
            <div class="">
                <?php
                    echo $quantity;
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
                <?php
                    $total = $discountedPrice * $quantity;
                    echo $total . "€";
                    ?>
            </div>
        </div>
    </div>

    <?php
    } else {
    ?>
    <div class="quantite0 mx-auto p-3" style="height: 500px;">
        <p class="mx-auto" style="color:red; font-size: 20px;">Votre panier est vide, veuillez choisir une quantité sur
            le catalogue.
        </p>
    </div>

    <?php
    }
    ?>

</section>

<?php
include('footer.php');
?>