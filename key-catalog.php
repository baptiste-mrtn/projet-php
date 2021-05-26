<?php

$products = [
  "name" => "Adidas Rainbow",
  "price" => 20000,
  "weight" => 500,
  "discount" => 20,
  "picture" => "img/shoes/paire9.jpg",
];

print_r($products);
require_once ('my-functions.php');
?>

<html>
    <body class="bg-dark">

        <h1>Key Catalog</h1>
        <div class="text-light">
            <?php
            $i = 0;
            $keys = array_keys($products);
            $value = array_values($products);

            foreach($keys as $keys[$i]){

                if ($i === 1) {
                    echo "<li class='list-group-item'>";
                    echo "$keys[$i] TTC : ";
                    formatPrice($value[$i]);
                    echo "€";
                    echo " | HT : ";
                    formatPrice(priceExcludingVAT($value[$i]));
                    echo " €<br>";
                    echo "</li>";
                }

                else if ($i === 4) {
                    echo "<li class='list-group-item'>";
                    echo "$keys[$i] : <img src='$value[$i]' alt='image baskettes'><br>";
                    echo "</li>";
                }

                else {
                echo "<li class='list-group-item'>";
                echo "$keys[$i] : $value[$i]<br>";
                echo "</li>";
                }

            $i = $i+1;
        }
             ?>
        </div>
    </body>
</html>
