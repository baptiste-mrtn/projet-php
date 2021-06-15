<?php
include('header.php');
include('database.php');
require_once("catalogs/my-functions.php");
addOneProduct($_POST['name'], $_POST['description'], $_POST['price'], $_POST['picture'], $_POST['weight'], $_POST['quantity'], $_POST['available'], $_POST['category_id']);
?>

<ul class='row col-4 list-group list-group-flush mx-auto mb-4 text-center' style='border: 2px solid red; margin-bottom:50px;'>
    <li class='list-group-item'>Nom:<?= $_POST['name'] ?></li>
    <li class='list-group-item'>Description:<?= $_POST['description'] ?></li>
    <li class='list-group-item'>Prix:<?= $_POST['price'] ?> centimes</li>
    <li class='list-group-item'><img alt="image" src="<?= $_POST['picture'] ?>" style='width:250px;height:300px;'></li>
    <li class='list-group-item'>Poids:<?= $_POST['weight'] ?></li>
    <li class='list-group-item'>Quantité:<?= $_POST['quantity'] ?></li>
    <li class='list-group-item'>Disponible:<?php if ($_POST['available'] == 1) {echo 'Oui';}else{echo "Non";} ?></li>
    <li class='list-group-item'>Catégorie:<?= $_POST['category_id'] ?></li>
</ul>

<?php
include('footer.php');
 ?>
