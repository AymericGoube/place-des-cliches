<?php

$reponse = $bdd->query("SELECT * FROM ateliers");

$admin_is_connected = isset($_SESSION['identifiant'], $_SESSION['password']);

if($admin_is_connected){
    echo  '<a href="controller/create.php" class="btn btn-success"><span class="glyphicon">&#x2b;</span>Ajouter un atelier </a>';
}

// $test = $bdd->query("SELECT ateliers.id, uploads.atelierId FROM ateliers INNER JOIN uploads ON ateliers.id=uploads.atelierId");
// $test2 = $test->fetchAll();
 ?>
