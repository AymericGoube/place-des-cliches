<?php
session_start();

//var_dump($_POST);
require '../../model/database.php';
$atelier = @htmlspecialchars($_POST['atelier']);
$activite = @htmlspecialchars($_POST['activite']);
$goals = @htmlspecialchars($_POST['goals']);
$duration = @htmlspecialchars($_POST['duration']);
$dateAtelier = @htmlspecialchars($_POST['dateAtelier']);
$place = @htmlspecialchars($_POST['place']);


if(isset($_GET['id'])){
    if(isset($atelier , $activite, $goals, $duration, $dateAtelier, $place, $_POST['submit'])){
        $req = $bdd->prepare("UPDATE ateliers SET atelier = :nvatelier , activity = :nvactivite,
            goals = :nvgoals, duration = :nvduration , dateAtelier = :nvdateAtelier, place = :nvplace WHERE
            id = :id ");
            //var_dump($bdd);

            $nvatelier = $atelier;
            $nvactivite = $activite;
            $nvgoals = $goals;
            $nvduration = $duration;
            $nvdate_atelier = $dateAtelier;
            $nvplace = $place;

            $req->execute(array(
                'nvatelier' => $nvatelier,'nvactivite' => $nvactivite, 'nvgoals' => $nvgoals,
                'nvduration'=> $nvduration, 'nvdateAtelier' => $nvdateAtelier, 'nvplace' => $nvplace,
                'id' => $_GET['id']));
                echo '<div class="alert alert-success alert-dismissable"><button type="button"
                class="close" data-dismiss="alert">&times;</button><strong>L atelier a ete modifie avec succes</strong></div>';

    }
}

$update = $bdd->prepare("SELECT * FROM ateliers WHERE id = :id");
$update->execute(array(
    'id' => $_GET['id']
));
?>



<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Modifier Atelier</title>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="../../views/lib/bootstrap/css/bootstrap.min.css">

    </head>
    <body>
        <?php require 'nav2.php'; ?>
        <?php while($updateForm = $update->fetch()){ ?>
        <form class="updateForm" action="" method="post">
            <label for="atelier">Atelier</label>
            <input type="text" name="atelier" value="<?php echo $updateForm['atelier'];?>">
            <label for="activite">Activite</label>
            <textarea name="activite" rows="8" cols="80" ><?php echo $updateForm['activity'];?></textarea>
            <label for="goals">Objectifs Pedagogiques</label>
            <textarea name="goals" rows="8" cols="80" ><?php echo $updateForm['goals']; ?></textarea>
            <label for="duration">Duree</label>
            <input type="text" name="duration" value="<?php echo $updateForm['duration'];?>">
            <label for="date_atelier">Date Atelier</label>
            <input type="date" name="dateAtelier" value="<?php echo $updateForm['dateAtelier']; ?>">
            <label for="place">Lieu</label>
            <input type="text" name="place" value="<?php echo $updateForm['place']; ?>">
            <input type="submit" name="submit" value="Valider">
        </form>
        <?php }

        $update->closeCursor(); ?>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../../views/lib/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
