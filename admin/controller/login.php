<?php

session_start();
require '../model/database.php';
// $remember = $_POST['hope']
// setcookie('admin', $remember, time() + 365 * 24 * 3600, null, null, false, true);

$req = $bdd->prepare("SELECT identifiant, password FROM admin WHERE identifiant = :identifiant AND password = :password");

if(isset($_POST['identifiant'], $_POST['password'], $_POST['submit'])){
    $identifiant = htmlspecialchars($_POST['identifiant']);
    $password = htmlspecialchars($_POST['password']);


    $req->execute(array(
        'identifiant' => $identifiant,
        'password' => $password

    ));
    $connectedAdmin = $req->fetch();
    if(!$connectedAdmin){
        echo '<div class="alert alert-danger alert-dismissable"><button type="button"
        class="close" data-dismiss="alert">&times;</button><strong>Verifiez bien
        votre identifiant et votre mot de passe !</strong></div>';
    }else{
        session_start();
        $_SESSION['identifiant'] = $connectedAdmin['identifiant'];
        $_SESSION['password'] = $connectedAdmin['password'];
        header('Location: http://localhost/place-des-cliches/admin/ateliers.php');

    }
}

 ?>
