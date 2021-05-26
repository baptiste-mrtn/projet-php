<?php

$products = [
  "Adidas Rainbow" => [
    "name" => "Adidas Rainbow",
    "price" => 20000,
    "weight" => 500,
    "discount" => 20,
    "picture" => "img/shoes/paire9.jpg",
  ],

  "Adidas Blue" => [
    "name" => "Adidas Blue",
    "price" => 49900,
    "weight" => 260,
    "discount" => 5,
    "picture" => "img/shoes/paire8.jpg",
  ],

  "Adidas Black & Red" => [
    "name" => "Adidas Black & Red",
    "price" => 25000,
    "weight" => 520,
    "discount" => 10,
    "picture" => "img/shoes/paire4.jpg",
  ]
  ];

  require_once ('my-functions.php');

?>

<html>
  <body class="bg-dark">

    <h1>Multidimensional Catalog</h1>

  <!--  <div class="container row mx-auto mt-4 mb-4">
    <ul class="row col-4 list-group list-group-flush mx-auto border bg-white text-center">
      <style>.list-group-item img{width: 200px; height: 200px;}</style>
      <li class="list-group-item">
        <?php
        echo ($products["Adidas Rainbow"]["name"]);
        ?>
      </li>
      <li class="list-group-item">
        <?php
        echo ($products["Adidas Rainbow"]["price"]);
        echo ("€");
        ?>
      </li>
      <li class="list-group-item">
        <?php
        echo ($products["Adidas Rainbow"]["weight"]);
        echo ("g");
        ?>
      </li>
      <li class="list-group-item">
        <?php
        echo ($products["Adidas Rainbow"]["discount"]);
        echo ("%");
        ?>
      </li>
      <li class="list-group-item">
        <img src="<?php echo ($products["Adidas Rainbow"]["picture"]);?>" alt="Adidas Rainbow">
      </li>
    </ul>

    <ul class="row col-4 list-group list-group-flush mx-auto border bg-white text-center">
      <li class="list-group-item">
        <?php
        echo ($products["Adidas Blue"]["name"]);
        ?>
      </li>
      <li class="list-group-item">
        <?php
        echo ($products["Adidas Blue"]["price"]);
        echo ("€");
        ?>
      </li>
      <li class="list-group-item">
        <?php
        echo ($products["Adidas Blue"]["weight"]);
        echo ("g");
        ?>
      </li>
      <li class="list-group-item">
        <?php
        echo ($products["Adidas Blue"]["discount"]);
        echo ("%");
        ?>
      </li>
      <li class="list-group-item">
        <img src="<?php echo ($products["Adidas Blue"]["picture"]);?>" alt="Adidas Blue">
      </li>
    </ul>

    <ul class="row col-4 list-group list-group-flush mx-auto border bg-white text-center">
      <li class="list-group-item">
        <?php
        echo ($products["Adidas Black & Red"]["name"]);
        ?>
      </li>
      <li class="list-group-item">
        <?php
        echo ($products["Adidas Black & Red"]["price"]);
        echo ("€");
        ?>
      </li>
      <li class="list-group-item">
        <?php
        echo ($products["Adidas Black & Red"]["weight"]);
        echo ("g");
        ?>
      </li>
      <li class="list-group-item">
        <?php
        echo ($products["Adidas Black & Red"]["discount"]);
        echo ("%");
        ?>
      </li>
      <li class="list-group-item">
        <img src="<?php echo ($products["Adidas Black & Red"]["picture"]);?>" alt="Adidas Black & Red">
      </li>
    </ul>
  </div> -->

    <div class="boucle-while">
      <h2>Boucle While</h2>
      <ul class='row col-4 list-group list-group-flush mx-auto mb-4 border bg-white text-center'>
      <?php
      $i = 0;
      $keys = array_keys($products);
      while($i < count($products)){
        $ii = 0;
        echo "$keys[$i] : <br>";
        $keys_value = array_keys($products[$keys[$i]]);
        $value = array_values($products[$keys[$i]]);
        while ($ii < count($keys_value)) {
          if ($ii === 4) {
            echo "<li class='list-group-item'>";
            echo "$keys_value[$ii] : <img src='$value[$ii]' alt='image baskettes'><br>";
            echo "</li>";
            $ii = $ii +1;
          }

          else if ($ii === 1) {
              echo "<li class='list-group-item'>";
              echo "$keys_value[$ii] : ";
              formatPrice($value[$ii]);
              echo " €<br>";
              echo "</li>";
              $ii = $ii +1;
          }

          else {
            echo "<li class='list-group-item'>";
            echo "$keys_value[$ii] : $value[$ii]<br>";
            echo "</li>";
          $ii = $ii +1;
        }
        }
        echo "<br>";
        $i = $i +1;
      }
      ?>
    </ul>
  </div>

  <div class="boucle-do-while">
    <h2>Boucle Do-While</h2>
        <ul class='row col-4 list-group list-group-flush mx-auto mb-4 border bg-white text-center'>
        <?php
        $i = 0;
        $keys = array_keys($products);
            do {
                $ii = 0;
                echo "$keys[$i] : <br>";
                $keys_value = array_keys($products[$keys[$i]]);
                $value = array_values($products[$keys[$i]]);
                do {
                    if ($ii === 4) {
                      echo "<li class='list-group-item'>";
                      echo "$keys_value[$ii] : <img src='$value[$ii]' alt='image baskettes'><br>";
                      echo "</li>";
                      $ii = $ii +1;
                    }

                    else if ($ii === 1) {
                        echo "<li class='list-group-item'>";
                        echo "$keys_value[$ii] : ";
                        formatPrice($value[$ii]);
                        echo " €<br>";
                        echo "</li>";
                        $ii = $ii +1;
                    }

                    else {
                      echo "<li class='list-group-item'>";
                      echo "$keys_value[$ii] : $value[$ii]<br>";
                      echo "</li>";
                    $ii = $ii +1;
                }
                } while ($ii < count($keys_value));
                echo "<br>";
                $i = $i +1;
            } while ($i < count($products));
         ?>
     </ul>
  </div>

  <div class="boucle-for">
    <h2>Boucle For</h2>
    <ul class='row col-4 list-group list-group-flush mx-auto mb-4 border bg-white text-center'>
        <?php
        $keys = array_keys($products);
        for ($i=0; $i < count($products) ; $i++) {
            echo "$keys[$i] : <br>";
            $keys_value = array_keys($products[$keys[$i]]);
            $value = array_values($products[$keys[$i]]);
            for ($ii=0; $ii < count($keys_value) ; $ii++) {
                if ($ii === 4) {
                  echo "<li class='list-group-item'>";
                  echo "$keys_value[$ii] : <img src='$value[$ii]' alt='image baskettes'><br>";
                  echo "</li>";
                }

                else if ($ii === 1) {
                    echo "<li class='list-group-item'>";
                    echo "$keys_value[$ii] : ";
                    formatPrice($value[$ii]);
                    echo " €<br>";
                    echo "</li>";
                    $ii = $ii +1;
                }

                else {
                  echo "<li class='list-group-item'>";
                  echo "$keys_value[$ii] : $value[$ii]<br>";
                  echo "</li>";
            }
            }
            echo "<br>";
        }
         ?>
    </ul>
  </div>

  <div class="boucle-foreach">
    <h2>Boucle Foreach</h2>
    <ul class='row col-4 list-group list-group-flush mx-auto mb-4 border bg-white text-center'>
    <?php
        $i = 0;
        $keys = array_keys($products);
        foreach($products as $products[$i]){
            $ii = 0;
            echo "$keys[$i] : <br>";
            $keys_value = array_keys($products[$keys[$i]]);
            $value = array_values($products[$keys[$i]]);
            foreach ($keys_value as $keys_value[$ii]) {
                if ($ii === 4) {
                  echo "<li class='list-group-item'>";
                  echo "$keys_value[$ii] : <img src='$value[$ii]' alt='image baskettes'><br>";
                  echo "</li>";
                  $ii = $ii +1;
                }

                else if ($ii === 1) {
                    echo "<li class='list-group-item'>";
                    echo "$keys_value[$ii] : ";
                    formatPrice($value[$ii]);
                    echo " €<br>";
                    echo "</li>";
                    $ii = $ii +1;
                }

                else {
                  echo "<li class='list-group-item'>";
                  echo "$keys_value[$ii] : $value[$ii]<br>";
                  echo "</li>";
                  $ii = $ii +1;
            }

        }
        $i = $i+1;
        }
        ?>
    </ul>
  </div>

  </body>
</html>
