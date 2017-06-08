<?php

$reponse = $bdd->query("SELECT * FROM ateliers");


$admin_is_connected = isset($_SESSION['id'], $_SESSION['password']);

if($admin_is_connected){
    echo  '<a href="controller/create.php" class="btn btn-success"><span class="glyphicon">&#x2b;</span>Ajouter un atelier </a>';
}


 ?>
