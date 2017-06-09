<?php require 'controller/login.php'; ?>
<?php require 'controller/signup.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Place des cliches</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="../views/lib/bootstrap/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="app.js"></script>
    </head>
    <body>
        <!-- si elle est tojours dans le cookie on la redirige automatiquement vers
        la page atelier.php-->

        <?php // if(isset($_COOKIE['identifiant'], $_COOKIE['password'])){
        // header('Location: http://localhost/place-des-cliches/admin/ateliers.php');

        //} else {?>
        <div class="formConnect">
        <form class="formAdmin" action="" method="post">
            <img class="logo" src="../views/img/logo.png" width="100px" alt="">
            <label for="identifiant">Identifiant :</label>
            <input id="identifiant" type="text" name="identifiant" value="" placeholder="identifiant">
            <label for="password">Mot de passe :</label>
            <input id="password" type="password" name="password" value="" placeholder="password">
            <label for="hope">Se souvenir de moi</label>
            <input type="checkbox" name="remember">
            <input type="submit" name="submit" value="Se connecter">
        </form>

        <form class="createAdmin" action="" method="post">
            <img class="logo" src="../views/img/logo.png" width="100px" alt="">
            <label for="nvidentifiant">Identifiant :</label>
            <input id="nvidentifiant" type="text" name="nvidentifiant" value="" placeholder="identifiant">
            <label for="nvpassword">Mot de passe :</label>
            <input id="nvpassword" type="password" name="nvpassword" value="" placeholder="password">
            <label for="remember">Se souvenir de moi</label>
            <input id="remember" type="checkbox" name="nvremember">
            <input type="submit" name="nvsubmit" value="S'inscrire">
        </form>
        </div>


        <?php // } ?>


        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="app.js"></script>

    </body>
</html>
