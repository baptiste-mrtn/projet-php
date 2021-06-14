
<tr>
    <th></th>
    <th>Article(s)</th>
    <th>Prix unitaire</th>
    <th>Quantité</th>
    <th>Prix total</th>
</tr>

<?php

require_once('database.php');
include('article.php');

    class Panier{

        $tableauPanier = [];

        public function add($id){
            $this->id=$id
        }

        public function update(){

        }

        public function delete(){

        }

        public function displayPanier(){

            ?>
            <tr>
                <td><?php $this->picture ?></td>
                <td><?php $this->nom ?></td>
                <td><?php $this->prix ?></td>
                <td><img alt'image' src='<?php $this->picture ?>' style='width:150px;height:200px;'></td>
            </tr>

            <?php

        }

    }
 ?>
