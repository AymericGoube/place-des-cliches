<?php
session_start();
require '../../model/database.php';

if(isset($_GET['id'])){
    $delete = $bdd->prepare("DELETE FROM ateliers WHERE id = :id");
    $delete->execute(array(
        'id' => $_GET['id']
    ));
}

header('Location: http://localhost/place-des-cliches/admin/ateliers.php');
 ?>
