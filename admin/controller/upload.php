<?php

require '../../model/database.php';

if(isset($_POST['atelier'], $_POST['activite'], $_POST['goals'], $_POST['duration'], $_POST['dateAtelier'], $_POST['place'], $_FILES['image'], $_POST['submit'])) {
    $atelier = htmlspecialchars($_POST['atelier']);
    $activite = htmlspecialchars($_POST['activite']);
    $goals = htmlspecialchars($_POST['goals']);
    $duration = htmlspecialchars($_POST['duration']);
    $dateAtelier = htmlspecialchars($_POST['dateAtelier']);
    $place = htmlspecialchars($_POST['place']);

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
        //  chmod($chemin, 0755);
      } else {
        $from = $_FILES['image']['tmp_name'];
        echo "<p>échec du transfert de l'image de $from à $chemin</p>";
      }

      $req = $bdd->prepare("INSERT INTO ateliers (atelier, activity, goals, duration, dateAtelier, place, image)
      VALUES (:atelier, :activity, :goals, :duration, :dateAtelier, :place, :image)");

/*INSERT INTO ateliers (
  atelier,
  activity,
  goals,
  duration,
  dateAtelier,
  place,
  image) VALUES (
  'atelier',
  'atelier',
  'a',
  '30',
  '2017-07-14 00:00:00',
  'paris',
  'images/logo2.png'
  )*/
/*INSERT INTO ateliers (atelier, activity, goals, duration, dateAtelier, place, image)
      VALUES ('az', 'az', 'az', '30min', '2017-23-06', 'paris', 'images/admin.png')*/
      if (
        $req->execute(array(
          'atelier'=>$atelier,
          'activity'=>$activite,
          'goals'=>$goals,
          'duration'=>$duration,
          'dateAtelier'=>$dateAtelier,
          'place'=>$place,
          'image'=>$chemin
        ))
      ) {
        echo "<p>la base de donné a été mise à jour</p>";
      } else {
        echo "<p>une erreur est survenue</p>";
      }
      echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close"
      data-dismiss="alert">&times;</button><strong>L atelier a ete ajoute avec succes</strong></div>';



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

// if(isset($_POST['submit']) && $_FILES['image']['size'] > 0) {
//    $name = $_FILES['image']['name'];
//    $tmpName  = $_FILES['image']['tmp_name'];
//    $size = $_FILES['image']['size'];
//    $type = $_FILES['image']['type'];
//    $fp = fopen($tmpName, 'r');
//    $content = fread($fp, filesize($tmpName));
//    $content = addslashes($content);
//    fclose($fp);

//    if(!get_magic_quotes_gpc()) {
//      $name = addslashes($name);
//    }
   // $req = $bdd->prepare('INSERT INTO uploads (name, size, type, content, atelierId) VALUES(:name, :size, :type, :content, :atelierId)');
   // $req->execute(array(
   //     'name' => $name,
   //     'size' => $size,
   //     'type' => $type,
   //     'content' => $content,
   //     'atelierId' => 1
   //      ));
//    echo "upload effectué";
// }

?>
