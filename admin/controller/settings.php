<?php
session_start();
require '../../model/database.php';

$identifiant = @htmlspecialchars($_POST['identifiant']);
$password    = @htmlspecialchars($_POST['password']);


if(isset($_GET['identifiant'])){
if(isset($identifiant, $password, $_POST['submit'])){
     $settings = $bdd->prepare('UPDATE admin SET identifiant = :nvidentifiant, password = :nvpassword
          WHERE identifiant = :identifiant');

     $nvidentifiant = $identifiant;
     $nvpassword = $password;

     $settings->execute(array(
      'nvidentifiant' => $nvidentifiant,
      'nvpassword'    => $nvpassword,
      'identifiant' => $_GET['identifiant']
));
     echo '<div class="alert alert-success alert-dismissable"><button type="button"
 class="close" data-dismiss="alert">&times;</button><strong>Les identifiants ont ete modifie
 avec succes </strong></div>';
}
}

$update_settings = $bdd->prepare('SELECT * FROM admin WHERE identifiant = :identifiant ');
$update_settings->execute(array(
     'identifiant' => $_GET['identifiant']
));





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
          <?php while($reponse = $update_settings->fetch()){ ?>
         <form class="settingsForm" action="" method="post">
              <label for="Identifiant">Votre Identifiant</label>
              <input type="text" name="identifiant" value="<?php echo $reponse['identifiant']; ?>">
              <label for="password">Votre mot de passe</label>
              <input type="text" name="password" value="<?php echo $reponse['password']; ?>">
              <input type="submit" name="submit" value="modifier mes identifiants">
         </form>
         <?php } $update_settings->closeCursor(); ?>
     </body>
 </html>
