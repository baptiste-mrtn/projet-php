<?php

    require_once('database.php');

    class Client{

        public $last_name; //je crée mes variables correspondant aux caracteristiques de mon client
        public $first_name;
        public $postalcode;
        public $town;

        public function __construct($last_name, $first_name, $postalcode, $town){ //fonction qui construit et prend en parametre mes variables précédentes
            $this->last_name=$last_name; //la valeur de ma variable correspond à la variable écrite (la valur de nom = $nom)
            $this->first_name=$first_name;
            $this->postalcode=$postalcode;
            $this->town=$town;

    }
    function displayClient(){ //fonction qui affiche la liste des clients
        ?>
        <tr>
                <td><?=$this->last_name?></td>
                <td><?=$this->first_name?></td>
                <td><?=$this->postalcode?></td>
                <td><?=$this->town?></td>
        </tr>
        <?php
    }
}

    class listClients{

        public $tableauCustomers = []; //je crée un tableau vide

        public function __construct(){ //ma fonction qui va construire
            foreach (allCustomers() as $customer) { //pour chaque fonction qui prend tout les clients de ma BDD en tant que client
                $newCustomer = new Client($customer['last_name'], $customer['first_name'], $customer['postalcode'], $customer['town']); //je crée une variable qui est un objet Client et qui en paramètre correspond aux caracteristiques de mon client
                array_push($this->tableauCustomers, $newCustomer);//j'envoi ce tableau tableauCustomers qui contient les newCustomer
            }
        }

        function displayListCli(){

            foreach ($this->tableauCustomers as $customer) { //pour chaque article de mon tableau
                $customer->displayClient(); //appel de la fonction qui affiche l'article
            }

        }


    }

 ?>
