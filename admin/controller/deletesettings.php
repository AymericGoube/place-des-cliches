<?php

session_start();
require '../../model/database.php';

if(isset($_GET['identifiant'])){
    $delete = $bdd->prepare('DELETE FROM admins WHERE identifiant = :identifiant ');
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
         <title></title>
         <link rel="stylesheet" href="../style.css">
         <link rel="stylesheet" href="../../views/lib/bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        <?php require 'nav2.php' ?>
        <div class="deleteAccount">
            <h1 class="confirmation">Voulez-vous supprimer définitivement votre compte ?</h1>
            <form class="deleteAccount2" action="" method="post">
                <button class="btn btn-inverse " type="submit" name="delete" >Supprimer mon compte definitivement</button>
            </form>
        </div>

    </body>
</html>
