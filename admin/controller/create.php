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
        <div class="form">
        <form class="createForm" action="" method="post" enctype="multipart/form-data">
            <label for="atelier">Atelier</label>
            <input class="form-control" id="atelier" type="text" name="atelier" placeholder="Atelier">
            <label for="activite">Activite</label>
            <textarea id="activite" name="activite" rows="8" cols="80" placeholder="Activite" ></textarea>
            <label for="goals">Objectifs Pedagogiques</label>
            <textarea id="goals" name="goals" rows="8" cols="80" placeholder="Objectifs" ></textarea>
            <label for="duration">Duree</label>
            <input id="duration" type="text" name="duration" placeholder="Duree" >

            <!-- <label for="dateAtelier" id="dateAtelier">Date Atelier</label> -->

            <label for="date">Date</label>
            <input id="date" type="text"
            class="form_datetime"
            id='datetimepicker4' name="dateAtelier" placeholder="Date">

            <label for="place">Lieu</label>
            <input type="text" name="place" placeholder="Lieu" >
            <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
            <label>Télécharger une image</label>
            <input type="file" name="image" value="Telecharger votre image">
            <input type="submit" name="submit" value="Valider">
        </form>
        </div>
        <script type="text/javascript">
            $(function () {
                $('.form_datetime').datetimepicker({format: 'yyyy-mm-dd hh:ii'});
            });
            console.log('salut');
        </script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../../views/lib/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
