<?php

session_start();

require 'upload.php';

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
        <form class="createForm" action="" method="post" enctype="multipart/form-data">
            <label for="atelier">Atelier</label>
            <input id="atelier" type="text" name="atelier" value="">
            <label for="activite">Activite</label>
            <textarea id="activite" name="activite" rows="8" cols="80" ></textarea>
            <label for="goals">Objectifs Pedagogiques</label>
            <textarea id="goals" name="goals" rows="8" cols="80" ></textarea>
            <label for="duration">Duree</label>
            <input id="duration" type="text" name="duration" >
            <label for="dateAtelier" id="dateAtelier">Date Atelier</label>
            <input type="date" name="dateAtelier" >
            <label for="place">Lieu</label>
            <input type="text" name="place" >
            <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
            <label>Télécharger une image</label>
            <input type="file" name="image">
            <input type="submit" name="submit" value="Valider">
        </form>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../../views/lib/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
