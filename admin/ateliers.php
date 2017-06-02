<?php

require '../model/database.php';
session_start();
$admin_connected = isset($_SESSION['identifiant'], $_SESSION['password']);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Ateliers</title>
        <link rel="stylesheet" href="../views/lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>

        <h1>Liste des Ateliers Place des cliches</h1>
        <?php if(isset($admin_connected)){
            echo '<a href="controller/logout.php">Se deconnecter</a>';
            echo '<a href="controller/settings.php?identifiant='. $_SESSION['identifiant'] .'">Parametrage du compte</a>';
        } ?>
        <img class="logo" src="../views/img/logo.png" width="150px" alt="">
        <?php if(isset($_SESSION['identifiant']) && (isset($_SESSION['password']))){
            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close"
            data-dismiss="alert">&times;</button></button><strong>Bonjour , ' . $_SESSION['identifiant'] . '
            </strong></div>';
        } ?>
        <?php require 'display.php'; ?>
        <table class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th>Ateliers</th>
                    <th>Activites</th>
                    <th>Objectifs Pedagogiques</th>
                    <th>Duree</th>
                    <th>Date</th>
                    <th>Lieu</th>
                    <th>Modifier un article</th>
                    <th>Supprimer un article</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($donnee = $reponse->fetch()){ ?>
                <tr>
                    <td><?php echo $donnee['atelier']; ?></td>
                    <td><?php echo $donnee['activity']; ?></td>
                    <td><?php echo $donnee['goals']; ?></td>
                    <td><?php echo $donnee['duration']; ?></td>
                    <td><?php echo $donnee['date_atelier']; ?></td>
                    <td><?php echo $donnee['place']; ?></td>
                    <?php if(isset($_SESSION['identifiant']) && isset($_SESSION['password'])){ ?>
                    <td>
                        <?php $updateWorkshops = array($donnee);
                        foreach ($updateWorkshops as $updateWorkshop ) {
                            echo '<a href="controller/update.php?id='. $donnee['idAtelier']. '"><i class="fa fa-edit"></i>
                            Modifier Atelier</a>';
                        }
                         ?>
                    </td>
                    <td>
                        <?php $deleteWorkshops = array($donnee);
                        foreach ($deleteWorkshops as $deleteWorkshop ) {
                            echo '<a href="controller/delete.php?id='. $donnee['idAtelier']. '"><i class="fa fa-trash" aria-hidden="true"></i>
                            Supprimer Atelier</a>';
                        }
                         ?>
                    </td>
                    <?php } ?>
                </tr>
                <?php } $reponse->closeCursor(); ?>
            </tbody>

        </table>

    </body>
</html>
