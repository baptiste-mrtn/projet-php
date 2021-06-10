<?php

$products = ["Low Green", "Mocha", "Game Royal"];
$first_item = ($products[0]);
$last_item = end($products);

// echo $first_item;
// echo $last_item;
 sort($products);
// print_r($products);

?>

<html>
  <body>

    <h1>Simple Catalog</h1>

    <div class="boucle-while">
      <h2>Boucle While</h2>
      <p class="text-light">
      <?php
      $i=0;
      while($i < count($products)){
        echo "$products[$i]<br>";
        $i = $i+1;
      }
      ?>
    </p>
  </div>

  <div class="boucle-do-while">
    <h2>Boucle Do-While</h2>
    <p class="text-light">
      <?php
      $i=0;
      do {
        echo "$products[$i]<br>";
        $i = $i+1;
      } while($i < count($products));
      ?>
    </p>
  </div>

  <div class="boucle-for">
    <h2>Boucle For</h2>
    <p class="text-light">
      <?php
      for($i =0; $i < count($products); $i = $i+1){
        echo "$products[$i]<br>";
      }
      ?>
    </p>
  </div>

  <div class="boucle-foreach">
    <h2>Boucle Foreach</h2>
    <p class="text-light">
      <?php
      $i = 0;
      foreach($products as $products[$i]){
        echo "$products[$i]<br>";
        $i = $i+1;
      }
      ?>
    </p>
  </div>

  </body>
</html>
