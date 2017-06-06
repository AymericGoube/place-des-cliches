<?php

// connexion a la base de donnee
require '../model/database.php';

// on verifie que l'utilisateur n'est pas connecte, que la session n'existe pas
// et que les cookies ne soient pas vides
if(!isset($_SESSION['id']) && isset($_COOKIE['identifiant'], $_COOKIE['password'])
&& !empty($_COOKIE['identifiant']) && !empty($_COOKIE['password'])){

    // alors on prepare une requiete de connexion

    $req = $bdd->prepare("SELECT identifiant, password FROM admins WHERE identifiant = :identifiant AND password = :password");
    $req->execute(array(
        'identifiant' => $_COOKIE['identifiant'],
        'password' => $_COOKIE['password']

    ));

    $reponse = $req->fetch()

    if($reponse){
        session_start();
        $_SESSION['identifiant'] = $reponse['identifiant'];
        $_SESSION['password']    = $reponse['password'];
    }

}


?>
