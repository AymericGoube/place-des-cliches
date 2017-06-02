<?php require 'controller/login.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Place des cliches</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="../views/lib/bootstrap/css/bootstrap.min.css">
    </head>
    <body>

        <form class="formAdmin" action="" method="post">
            <img class="logo" src="../views/img/logo.png" width="150px" alt="">
            <label for="identifiant">Indentifiant :</label>
            <input type="text" name="identifiant" value="" placeholder="Identifiant">
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" value="" placeholder="password">
            <label for="hope">Se souvenir de moi</label>
            <input type="checkbox" name="hope" value="" id='hope'>
            <input type="submit" name="submit" value="Connexion">
        </form>

    </body>
</html>
