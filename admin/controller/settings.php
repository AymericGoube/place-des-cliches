<?php
session_start();
require '../../model/database.php';

if(isset($_GET['identifiant'])){
if(isset($_POST['identifiant'], $_POST['password'], $_POST['submit'])){
     $identifiant = htmlspecialchars($_POST['identifiant']);
     $password    = htmlspecialchars($_POST['password']);
     $settings = $bdd->prepare('UPDATE admins SET identifiant = :nvidentifiant, password = :nvpassword
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

$update_settings = $bdd->prepare('SELECT * FROM admins WHERE identifiant = :identifiant ');
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
          <?php require 'nav2.php'; ?>
          <!-- <img src="../../views/img/logo.png" width="100px" alt=""> -->
          <?php while($reponse = $update_settings->fetch()){ ?>
             <div class="form">
         <form class="settingsForm" action="" method="post">
              <label for="Identifiant">Votre Identifiant</label>
              <input type="text" name="identifiant" value="<?php echo $reponse['identifiant']; ?>">
              <label for="password">Votre mot de passe</label>
              <input type="text" name="password" value="<?php echo $reponse['password']; ?>">
              <input type="submit" name="submit" value="modifier mes identifiants">
         </form>
         </div>
         <?php } $update_settings->closeCursor(); ?>

         <?php echo '<a href="deletesettings.php?identifiant=' . $_SESSION['identifiant'] . '" class="btn btn-danger">Supprimer votre compte</a>'; ?>

         <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
         <script type="text/javascript" src="../../views/lib/bootstrap/js/bootstrap.min.js"></script>
     </body>
 </html>
