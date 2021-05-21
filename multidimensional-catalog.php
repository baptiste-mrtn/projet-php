<?php

$products = [
  "Adidas Rainbow" => [
    "name" => "Adidas Rainbow",
    "price" => 200,
    "weight" => 500,
    "discount" => 20,
    "picture" => "img/shoes/paire9.jpg",
  ],

  "Adidas Blue" => [
    "name" => "Adidas Blue",
    "price" => 200,
    "weight" => 500,
    "discount" => 20,
    "picture" => "img/shoes/paire8.jpg",
  ],

  "Adidas Black & Red" => [
    "name" => "Adidas Black & Red",
    "price" => 200,
    "weight" => 500,
    "discount" => 20,
    "picture" => "img/shoes/paire4.jpg",
  ]
  ];

?>

<html>
  <body class="bg-dark">
    <div class="container row mx-auto mt-4 mb-4">
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
  </body>
</html>
