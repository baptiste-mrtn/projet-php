    <?php
    require_once("header.php");
    require_once("catalogs/my-functions.php");
    require_once("database.php");
    ?>

    <form method="post" action="view.php">

        <tr>
            <p><input type="text" name="nameproduct" placeholder="nameproduct"></p>
            <p><input type="text" name="description" placeholder="description"></p>
            <p><input type="number" name="price" placeholder="price" min=0></p>
            <p><input type="text" name="image" placeholder="image"> </p>
            <p><input type="number" name="weight" placeholder="weight"></p>
            <p><input type="number" name="quantity" placeholder="quantity"></p>
            <p><input type="number" name="available" placeholder="available"></p>
            <p><input type="number" name="category_id" placeholder="category"></p>

        </tr>
    </form>



    <?php
    include("footer.php");
    addOneProduct($_POST['nameproduct'], $_POST['description'], $_POST['price'], $_POST['image'], $_POST['weight'], $_POST['quantity'], $_POST['available'], $_POST['category_id'],$_POST['level'],$_POST['size'],$_POST['brand']);

    ?>

    <li><?php echo $_POST['nameproduct'] ?> </li>
    <li><?php echo $_POST['description'] ?> </li>
    <li><?php echo $_POST['price'] ?> </li>
    <li><?php echo $_POST['image'] ?> </li>
    <li><?php echo $_POST['weight'] ?> </li>
    <li><?php echo $_POST['quantity'] ?> </li>
    <li><?php echo $_POST['available'] ?> </li>
    <li><?php echo $_POST['category_id'] ?> </li>
    <li><?php echo $_POST['level'] ?> </li>
    <li><?php echo $_POST['size'] ?> </li>
    <li><?php echo $_POST['brand'] ?> </li>

<?php

//Fonction qui m'affiche l'ajout d'un article

function addOneProduct($name,$description,$price,$image,$weight,$quantity,$available,$category_id) {
    $bdd = accessbdd();
    $query_add = $bdd->prepare('INSERT INTO products (name, description, price, image, weight, quantity, available, category_id)
    VALUE (:name, :description, :price, :image, :weight, :quantity, :available, :category_id)');
    $query_add->execute(array(
        'name' => $name,
        'description' => $description,
        'price' => $price,
        'image' => $image,
        'weight' => $weight,
        'quantity' => $quantity,
        'available' => $available,
        'category_id' => $category_id,
    ));

    echo "Le produit a bien été ajouté";

};
?>
