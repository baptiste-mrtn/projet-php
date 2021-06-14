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

      <h2>Le Ca-Catalogue !</h2>
      <p class="text-light text-center">Choose ur weapon m8</p>

      <?php
      include('catalogue.php');
      $catalog = new Catalogue();//nouveau objet catalogue
      var_dump($catalog);
      $catalog->displayCat();//affiche
      //$baskette1 = new Article("Adidas Rainbow", "baskettes moches", "500", "img/shoes/paire9.jpg", "500", "100", "oui"); //création de ma variable qui correspond à un objet Article (instance) et lui donne des valeurs en paramètres
      //$baskette1->displayArticle(); //appel de la fonction qui affiche mon article pour ma variable
      ?>

      <h2>Les ien-cli</h2>

      <table class="text-light center mx-auto mb-4" style="border: 2px solid red;">
      <tr style="border: 1px solid white;">
          <th>Nom</th>
          <th>Prénom</th>
          <th>Code postal</th>
          <th>Ville</th>
      </tr><br>

      <?php

      include('clients.php');
      $ienclis = new listClients();
      $ienclis->displayListCli();

      ?>
  </table>


    <?php
      include ('footer.php');
    ?>

      <script>
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"
      </script>
