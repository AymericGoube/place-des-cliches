<?php

// session_start();
require '../model/database.php';

if(isset($_POST['nvidentifiant'], $_POST['nvpassword'], $_POST['nvsubmit'])) {
    $nvidentifiant = htmlspecialchars($_POST['nvidentifiant']);
    $nvpassword = htmlspecialchars($_POST['nvpassword']);

    $req = $bdd->prepare('INSERT INTO admins (identifiant, password) VALUES(:identifiant, :password)');

    $_SESSION['identifiant'] = $nvidentifiant;
    $_SESSION['password']    = $nvpassword;

    $req->execute(array(
        'identifiant'=> $nvidentifiant,
        'password'=> $nvpassword
    ));

    header('Location: ateliers.php');

}


?>
