<?php

// session_start();
require '../model/database.php';

if(isset($_POST['nvidentifiant'], $_POST['nvpassword'], $_POST['nvsubmit'])) {

    $nvidentifiant = htmlspecialchars($_POST['nvidentifiant']);
    $nvpassword = htmlspecialchars($_POST['nvpassword']);
    $req = $bdd->query("SELECT * FROM admins WHERE identifiant = :nvidentifiant ");
    $reponse = $req->fetchAll();
    if(empty($reponse)){
        $req = $bdd->prepare('INSERT INTO admins (identifiant, password) VALUES(:identifiant, :password)');

        $_SESSION['identifiant'] = $nvidentifiant;
        $_SESSION['password']    = $nvpassword;

        $req->execute(array(
            'identifiant'=> $nvidentifiant,
            'password'=> $nvpassword
        ));

        header('Location: http://localhost/place-des-cliches/admin/ateliers.php');

    }else{
        echo "l'identifiant nest pas disponible";
    }
}





?>
