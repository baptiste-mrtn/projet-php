<?php
function formatPrice($value)
{
    $euros = round($value) / 100;
    number_format($value, 2);
    return $euros;
}

function priceExcludingVAT($euros)
{
    $priceHT = $euros / (1 + 20 / 100);
    return $priceHT;
}

function displayDiscountedPrice($euros, $purcent)
{
    $remise = $euros * ($purcent / 100);
    $remise = $euros - $remise;
    return $remise;
}

//Fonction qui m'affiche l'ajout d'un article

function addOneProduct($name, $description, $price, $picture, $weight, $quantity, $available, $category_id)
{
    if (isset($_POST['name'])) {

        $bdd = connectDatabase();
        $query_add = $bdd->prepare('INSERT INTO products (name, description, price, picture, weight, quantity, available, category_id)
                                VALUES (:name, :description, :price, :picture, :weight, :quantity, :available, :category_id)');
        $query_add->execute(array(
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'picture' => $picture,
            'weight' => $weight,
            'quantity' => $quantity,
            'available' => $available,
            'category_id' => $category_id,
        ));

?>
<p class="col-3 mx-auto mb-4 text-center" style="border: 1px solid green; color:green;">Le produit a bien été ajouté à
    la BDD</p>
<?php
    }
};



?>