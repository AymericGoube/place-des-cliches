<?php

require '../../model/database.php';

if(isset($_POST['atelier'], $_POST['activite'], $_POST['goals'], $_POST['duration'], $_POST['dateAtelier'], $_POST['place'], $_POST['submit'])) {
    $atelier = htmlspecialchars($_POST['atelier']);
    $activite = htmlspecialchars($_POST['activite']);
    $goals = htmlspecialchars($_POST['goals']);
    $duration = htmlspecialchars($_POST['duration']);
    $dateAtelier = htmlspecialchars($_POST['dateAtelier']);
    $place = htmlspecialchars($_POST['place']);

    $req = $bdd->prepare("INSERT INTO ateliers (atelier, activity, goals, duration, dateAtelier, place)
    VALUES (?,?,?,?,?,?)");
    $req->execute(array(
        $atelier, $activite, $goals, $duration, $dateAtelier, $place
    ));
    echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close"
    data-dismiss="alert">&times;</button><strong>L atelier a ete ajoute avec succes</strong></div>';

}

if(isset($_POST['submit']) && $_FILES['image']['size'] > 0) {
   $name = $_FILES['image']['name'];
   $tmpName  = $_FILES['image']['tmp_name'];
   $size = $_FILES['image']['size'];
   $type = $_FILES['image']['type'];
   $fp = fopen($tmpName, 'r');
   $content = fread($fp, filesize($tmpName));
   $content = addslashes($content);
   fclose($fp);

   if(!get_magic_quotes_gpc()) {
     $name = addslashes($name);
   }
   $req = $bdd->prepare('INSERT INTO uploads (name, size, type, content, atelierId) VALUES(:name, :size, :type, :content, :atelierId)');
   $req->execute(array(
       'name' => $name,
       'size' => $size,
       'type' => $type,
       'content' => $content,
       'atelierId' => 1
       ));
   echo "upload effectué";
}

?>