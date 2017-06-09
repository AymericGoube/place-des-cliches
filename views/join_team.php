
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Nous rejoindre</title>
            <link rel="stylesheet" href="css/join_team.css">
        </head>
        <body>
            <div class="form">
            <form class="form-group" action="view.php" method="post">
                <img class="logo" src="../views/img/slogan.png" width="200px" alt="">

                    <input type="text" class="formControl" name="name" placeholder="Nom">
                    <input type="text" class="formControl" name="firstname" placeholder="Prenom">
                    <input type="email" class="formControl" name="password" placeholder="Email">
                    <input type="password" class="formControl" name="password" placeholder="password">
                    <select class="" name="">
                        <optgroup label="Travaille dans un etablissement scolaire">
                            <option value="">Primaire</option>
                            <option value="">College</option>
                            <option value="">Lycee</option>
                            <option value="">Etablissement du superieur</option>
                        </optgroup>
                        <optgroup label="Eleve ou Etudiant">
                            <option value="">College</option>
                            <option value="">Lycee</option>
                            <option value="">Etablissement du superieur</option>
                        </optgroup>
                            <option value="">Travaille dans une structure jeunesse</option>
                            <option value="">Travaille pour une association</option>
                            <option value="">Autres</option>
                    </select>
                    <input type="text" name="departement" value="" placeholder="departement">
                <button  class="btn-send" value="connexion"  type="submit">Inscription</button><br>

            </form>
            </div>
        </body>
    </html>
