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

    if(isset($atelier , $activite, $goals, $duration, $dateAtelier, $place, $_FILES['image'], $_POST['submit'])){
        

            $nvatelier = $atelier;
            $nvactivite = $activite;
            $nvgoals = $goals;
            $nvduration = $duration;
            $nvdateAtelier = $dateAtelier;
            $nvplace = $place;
            $nvimage = $_FILES['image'];

            if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
  $tailleMax = 3000000; // la taille maximale de l'image en octets (dans cet exemple, 3000000 octets, soit 3Mo)
  $extensionsValides = array('jpg', 'jpeg', 'gif', 'png'); // les extensions valides de l'image

  if ($_FILES['image']['size'] <= $tailleMax) {
    $extensionUpload = strtolower(substr(strrchr($_FILES['image']['name'], '.'), 1)); // renvoie l'extension de fichier avec le point

    /* la fonction substr permet d'ignorer un caractère, en l'occurence le ., qui est le 1er caractère, d'où le 1
    la fonction strtolower permet de mettre l'extension en minuscule, au cas où l'image aurait pour extension JPG, JPEG, GIF ou PNG */


    // vérifie si l'extension de l'image sélectionnée par l'utilisateur figure bien dans le tableau des extensions valides
    if (in_array($extensionUpload, $extensionsValides)) {
      $chemin = "images/".$_FILES['image']['name']; /* correspond au dossier où sera transféré l'image
      Exemple : si l'id correspond à 10 et l'image au format jpg, le nom de l'image sera 10.jpg */
      $resultat = move_uploaded_file($_FILES['image']['tmp_name'], "../$chemin"); /* fonction pour déplacer l'image dans un dossier temporaire, qui correspond au dossier photos */
      if ($resultat) {
        echo "<p>transfert de l'image réussi</p>";
         chmod($chemin, 0755);
      } else {
        $from = $_FILES['image']['tmp_name'];
        echo "<p>échec du transfert de l'image de $from à $chemin</p>";
      }

      $req = $bdd->prepare("UPDATE ateliers SET atelier = :nvatelier , activity = :nvactivite,
            goals = :nvgoals, duration = :nvduration , dateAtelier = :nvdateAtelier, place = :nvplace, image = :nvimage WHERE
            id = :id ");


      if (
        $req->execute(array(
                'nvatelier' => $nvatelier,'nvactivite' => $nvactivite, 'nvgoals' => $nvgoals,
                'nvduration'=> $nvduration, 'nvdateAtelier' => $nvdateAtelier, 'nvplace' => $nvplace,
                'nvimage' => $chemin, 'id' => $_GET['id']))
      ) {
        echo "<p>la base de donné a été mise à jour</p>";
      } else {
        echo "<p>une erreur est survenue</p>";
      }
      echo '<div class="alert alert-success alert-dismissable"><button type="button"
                class="close" data-dismiss="alert">&times;</button><strong>L atelier a ete modifie avec succes</strong></div>';



      // si l'image a bien été transféré, on l'insère OU on la modifie dans la base de données
      // if ($resultat) {
      //   $insert = $bdd->prepare("INSERT INTO ateliers (atelier, activity, goals, duration, dateAtelier, place, image) VALUES (?,?,?,?,?,?,?)");
      //   $insert->execute(array($_FILES['image']));
      // } else {
      //   echo "Erreur dans le transfert de l'image";
      // }

    }
    else {
      echo "Le format de l'image doit être soit jpg, soit jpeg, soit gif, soit png";
    }
  }
  else {
    echo "L'image ne doit pas dépasser 3Mo. Veuillez choisir une autre image";
  }
}

            

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
        <form class="updateForm" action="" method="post" enctype="multipart/form-data">
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
            <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
            <label>Télécharger une nouvelle image</label>
            <input type="file" name="image" value="<?php echo $updateForm['image']; ?>">
            <input type="submit" name="submit" value="Valider">
        </form>
        <?php }

        $update->closeCursor(); ?>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../../views/lib/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
