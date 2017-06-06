<?php

require '../model/database.php';
session_start();


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

        <?php require 'nav.php';

        ?>
        <?php if(isset($_SESSION['identifiant']) && (isset($_SESSION['password']))){
            echo '<div class="message alert alert-success alert-dismissable"><button type="button" class="close"
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
                    <th>Image</th>
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
                    <td><?php echo $donnee['dateAtelier']; ?></td>
                    <td><?php echo $donnee['place']; ?></td>
                    <td><?php echo '<img src="'.$donnee['image'].'" width="100" height="100">'; ?></td>
                    <?php if(isset($_SESSION['identifiant']) && isset($_SESSION['password'])){ ?>
                    <td>
                        <?php $updateWorkshops = array($donnee);
                        foreach ($updateWorkshops as $updateWorkshop ) {
                            echo '<a href="controller/update.php?id='. $donnee['id']. '"><i class="fa fa-edit"></i>
                            Modifier Atelier</a>';
                        }
                         ?>
                    </td>
                    <td>
                        <?php $deleteWorkshops = array($donnee);
                        foreach ($deleteWorkshops as $deleteWorkshop ) {
                            echo '<a href="controller/delete.php?id='. $donnee['id']. '"><i class="fa fa-trash" aria-hidden="true"></i>
                            Supprimer Atelier</a>';
                        }
                         ?>
                    </td>
                    <?php } ?>
                </tr>
                <?php } $reponse->closeCursor(); ?>
            </tbody>


        </table>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../views/lib/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
