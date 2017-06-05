<?php

session_start();
require '../model/database.php';



// on declare les variable de connexion et on les securise
$identifiant = @htmlspecialchars($_POST['identifiant']);
$password =   @htmlspecialchars($_POST['password']);

// on prepare la requete de connexion
$req = $bdd->prepare("SELECT identifiant, password FROM admin WHERE identifiant = :identifiant AND password = :password");

// si le formulaire est rempli et valide
if(isset($_POST['identifiant'], $_POST['password'], $_POST['submit'])){

// alors on execute la requete
    $req->execute(array(
        'identifiant' => $identifiant,
        'password' => $password

    ));
    // si la case se souvenir a ete coche , on initialise les COOKIES
    if(isset($_POST['remember'])){
        setcookie('identifiant', @htmlspecialchars($_POST['identifiant']) , time() + 365 * 24 * 3600, null, null, false, true);
        setcookie('password', @htmlspecialchars($_POST['password']) , time() + 365 * 24 * 3600, null, null, false, true);
    };
    // on verifie que les identifiants et mot de passe correspondent
    $connectedAdmin = $req->fetch();
    // si ils sont differents, on affiche une alerte
    if(!$connectedAdmin){
        echo '<div class="alert alert-danger alert-dismissable"><button type="button"
        class="close" data-dismiss="alert">&times;</button><strong>Verifiez bien
        votre identifiant et votre mot de passe !</strong></div>';
    // Sinon on entre dans la session et la connexion se fait
    }else{
        session_start();
        $_SESSION['identifiant'] = $connectedAdmin['identifiant'];
        $_SESSION['password'] = $connectedAdmin['password'];
        // on est redirige vers la page des ateliers
        header('Location: http://localhost/place-des-cliches/admin/ateliers.php');

    }
}

 ?>
