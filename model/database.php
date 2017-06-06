<?php

//require '../../.config.php';
require (dirname(__DIR__).'/.config.php');

try {
	$bdd = new PDO('mysql:host=localhost;dbname='.$dbname.';charset=utf8', $user, $password);
} catch (Exception $e) {
	die('Erreur :'.$e->getMessage());
}

?>
