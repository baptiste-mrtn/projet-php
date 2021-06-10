<?php


include('products.php');
require_once ('my-functions.php');

?>


    <h1 class="mb-3">Silent - Tu veux des belles grolles ?</h1>

    <div class="boucle-foreach">
      <h2 class="mb-4">Catalogue - *psst psst* Achètes achètes...</h2>
      <ul class='row col-4 list-group list-group-flush mx-auto mb-4 text-center'>
      <?php
          $i = 0;
          $keys = array_keys($products);

          foreach($products as $products[$i]){
              $ii = 0;
              echo "<div style='border: 2px solid red; margin-bottom:50px; background-color: white;'>";

              $keys_value = array_keys($products[$keys[$i]]);
              $value = array_values($products[$keys[$i]]);
              $purcent = $value[3];

              foreach ($keys_value as $keys_value[$ii]) {

                  if ($ii === 4) {
                    echo "<li class='list-group-item mb-3'>";
                    echo "<img src='$value[$ii]' alt='image baskettes'><br>";
                    echo "</li>";
                    $ii = $ii +1;
                  }

                  else if ($ii === 3) {
                      $ii = $ii +1;
                  }

                  else if ($ii === 2) {
                      echo "<li class='list-group-item'>";
                      echo "$keys_value[$ii] : ~$value[$ii]";
                      echo " g<br>";
                      echo "</li>";
                      $ii = $ii +1;
                  }

                  else if ($ii === 1) {
                      echo "<li class='list-group-item'>";
                      echo "$keys_value[$ii] TTC : ";
                      echo "<span
                      style='color: red;
                          text-decoration: line-through;'>";
                      formatPrice($value[$ii]);
                      echo "€ </span>";
                      echo "<span
                      style='color: green;
                            text-decoration: none'>";
                      echo " -";
                      echo ($value[$ii+2]);
                      echo "% </span>";
                      echo "->";
                      formatPrice(displayDiscountedPrice($value[$ii], $value[$ii+2]));
                      echo "€ <br> HT : ";
                      formatPrice(priceExcludingVAT($value[$ii]));
                      echo " €<br>";
                      echo "</li>";
                      $ii = $ii +1;
                  }

                  else {
                    echo "<li class='list-group-item mt-4'>";
                    echo "$value[$ii]<br>";
                    echo "</li>";
                    $ii = $ii +1;
              }

          }
          ?>
          <form class="mb-4" action="cart.php" method="post">
              <label for="quantite">Quantité</label>
              <select class="mb-2" name="quantite">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
              </select>
              <br>
              <label for="pointure">Pointure</label>
              <select class="mb-2" name="pointure">
                  <option value="35">35</option>
                  <option value="36">36</option>
                  <option value="37">37</option>
                  <option value="38">38</option>
                  <option value="39">39</option>
                  <option value="40">40</option>
                  <option value="41">41</option>
                  <option value="42">42</option>
                  <option value="43">43</option>
                  <option value="44">44</option>
                  <option value="45">45</option>
              </select>
              <br>
              <input type="submit" name="commande" value="Ajouter au panier">
              <input type="hidden" name="article" value="<?php echo $keys[$i]; ?>">
          </form>
      </div>
          <?php

          $i = $i+1;
          }
          ?>


      </ul>
    </div>

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
</div>

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
        $purcent = $value[3];

        while ($ii < count($keys_value)) {

          if ($ii === 4) {
            echo "<li class='list-group-item'>";
            echo "$keys_value[$ii] : <img src='$value[$ii]' alt='image baskettes'><br>";
            echo "</li>";
            $ii = $ii +1;
          }

          else if ($ii === 3) {
              echo "<li class='list-group-item'>";
              echo "$keys_value[$ii] : -$value[$ii]%";
              echo " -> ";
              formatPrice(displayDiscountedPrice($value[$ii-2], $value[$ii]));
              echo " €<br>";
              echo "</li>";
              $ii = $ii +1;
          }

          else if ($ii === 1) {
              echo "<li class='list-group-item'>";
              echo "$keys_value[$ii] TTC : ";
              formatPrice($value[$ii]);
              echo "€";
              echo " | HT : ";
              formatPrice(priceExcludingVAT($value[$ii]));
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
                $purcent = $value[3];

                do {
                    if ($ii === 4) {
                      echo "<li class='list-group-item'>";
                      echo "$keys_value[$ii] : <img src='$value[$ii]' alt='image baskettes'><br>";
                      echo "</li>";
                      $ii = $ii +1;
                    }

                    else if ($ii === 3) {
                        echo "<li class='list-group-item'>";
                        echo "$keys_value[$ii] : -$value[$ii]%";
                        echo " -> ";
                        formatPrice(displayDiscountedPrice($value[$ii-2], $value[$ii]));
                        echo " €<br>";
                        echo "</li>";
                        $ii = $ii +1;
                    }

                    else if ($ii === 1) {
                        echo "<li class='list-group-item'>";
                        echo "$keys_value[$ii] TTC : ";
                        formatPrice($value[$ii]);
                        echo "€";
                        echo " | HT : ";
                        formatPrice(priceExcludingVAT($value[$ii]));
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
            $purcent = $value[3];

            for ($ii=0; $ii < count($keys_value) ; $ii++) {

                if ($ii === 4) {
                  echo "<li class='list-group-item'>";
                  echo "$keys_value[$ii] : <img src='$value[$ii]' alt='image baskettes'><br>";
                  echo "</li>";
                }

                else if ($ii === 3) {
                    echo "<li class='list-group-item'>";
                    echo "$keys_value[$ii] : -$value[$ii]%";
                    echo " -> ";
                    formatPrice(displayDiscountedPrice($value[$ii-2], $value[$ii]));
                    echo " €<br>";
                    echo "</li>";
                }

                else if ($ii === 1) {
                    echo "<li class='list-group-item'>";
                    echo "$keys_value[$ii] TTC : ";
                    formatPrice($value[$ii]);
                    echo "€";
                    echo " | HT : ";
                    formatPrice(priceExcludingVAT($value[$ii]));
                    echo " €<br>";
                    echo "</li>";
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
</div> -->
