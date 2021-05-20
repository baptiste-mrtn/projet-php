<?php

$products = ["Low Green", "Mocha", "Game Royal"];
$first_item = ($products[0]);
$last_item = end($products);

echo $first_item;
echo $last_item;
sort($products);
print_r($products);

?>
