<?php

// on demarre la session
session_start();

// on vide le cookie lorsqu'on se deconnecte nous meme
setcookie('identifiant', '', time() -3600);
setcookie('password', '', time() -3600);


$_SESSION = array();

// on detruit la session
session_destroy();

// on est redirige vers la page d'accueil
header("Location: http://localhost/place-des-cliches/admin/index.php");

 ?>
