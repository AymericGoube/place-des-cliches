<?php
require '../.config.php';
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
    </head>
    <body>
        <h1>Liste des Ateliers Place des cliches</h1>
        <img class="logo" src="../views/img/logo.png" width="150px" alt="">
        <a href="#">Ajouter un atelier</a>
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
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>

        </table>

    </body>
</html>
