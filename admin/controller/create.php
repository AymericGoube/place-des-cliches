<?php

session_start();
require '../../model/database.php';

$create = $bdd->query('SELECT * FROM ateliers');

$atelier = @htmlspecialchars($_POST['atelier']);
$activite = @htmlspecialchars($_POST['activite']);
$goals = @htmlspecialchars($_POST['goals']);
$duration = @htmlspecialchars($_POST['duration']);
$date_atelier = @htmlspecialchars($_POST['date_atelier']);
$place = @htmlspecialchars($_POST['place']);

if(isset($atelier, $activite, $goals, $duration, $date_atelier, $place, $_POST['submit'])) {
    $req = $bdd->prepare("INSERT INTO ateliers (atelier, activity, goals, duration, date_atelier, place)
    VALUES (?,?,?,?,?,?)");
    $req->execute(array(
        $atelier, $activite, $goals, $duration, $date_atelier, $place
    ));
    echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close"
    data-dismiss="alert">&times;</button><strong>L atelier a ete ajoute avec succes</strong></div>';

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
        <form class="createForm" action="" method="post">
            <label for="atelier">Atelier</label>
            <input type="text" name="atelier" value="">
            <label for="activite">Activite</label>
            <textarea name="activite" rows="8" cols="80" ></textarea>
            <label for="goals">Objectifs Pedagogiques</label>
            <textarea name="goals" rows="8" cols="80" ></textarea>
            <label for="duration">Duree</label>
            <input type="text" name="duration" >
            <label for="date_atelier">Date Atelier</label>
            <input type="date" name="date_atelier" >
            <label for="place">Lieu</label>
            <input type="text" name="place" >
            <input type="submit" name="submit" value="Valider">
        </form>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../../views/lib/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
