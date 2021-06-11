<?php
include ('header.php');
?>
    <body>

      <?php
      //include ('simple-catalog.php');
      ?>

      <?php
      //include ('key-catalog.php');
      ?>

      <?php
      //include ('multidimensional-catalog.php');
      ?>

      <?php
      //include ('database.php');
      ?>

      <?php
      include('catalogue.php');
      $catalog = new Catalogue();
      var_dump($catalog);
      $catalog->displayCat();
      //$baskette1 = new Article("Adidas Rainbow", "baskettes moches", "500", "img/shoes/paire9.jpg", "500", "100", "oui");
      //$baskette1->displayArticle();
      ?>


    <?php
      include ('footer.php');
    ?>

      <script>
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"
      </script>
