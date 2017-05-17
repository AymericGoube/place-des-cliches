
<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="views/lib/materialize/materialize.min.css"  media="screen,projection"/>
  <!-- Importation du CSS -->
  <link rel="stylesheet" href="views/css/index.css">
  <!-- Importation des Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Paytone+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Paytone+One|Source+Sans+Pro:200,300,400" rel="stylesheet">   <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta charset="utf-8">


</head>

<body>

 <?php require "views/header.php" ?>

<!-- Création du Header -->
<div class="parallax-container">
  <!-- <div class="parallax"><img class="ami" src="img/ami.png"></div> -->
  <img class="slo" src="views/img/slogan.png" alt="">
</div>
<!-- <div class="parallax"><img class="gradient" src="img/gradient.jpg" alt=""></div> -->
<div class="section white">
  <div class="row container">
    <img class="col s5" src="views/img/ml.png" alt="" style="height:390px;">
    <h2 class="header col s7">A PROPOS DE PLACE DES CLICHÉS</h2>
    <p class="grey-text text-darken-3 lighten-3 col s7" style="font-size:20px; margin:0;">Place des Clichés est une association loi 1901 qui a pour objet d’amener les jeunes à
      s’interroger et prendre conscience des représentations femmes-hommes dans la
      société actuelle. Nous pensons que c'est en se questionnant sur ces représentations
      que l'on pourra les dépasser et atteindre l'égalité entre les femmes et les hommes.<br>
      Inscrite dans le cadre du programme scolaire des collégiens et lycéens, nous
      proposons aux établissements de faire des interventions ludiques, participatives et
      basées sur des exemples très concrets auprès des élèves.<br>
      Nous avons déjà réalisé de nombreux ateliers dans des établissements d'Ile-
      de-France, avec un très fort taux de satisfaction des élèves et des enseignants
    </p>
    <a class="waves-effect waves-purple btn col s2" style="float:right; background-color: #558ed5;">Notre Histoire</a>
  </div>
</div>

<!-- Création image Ateliers fond bleu -->
<div class="parallax-container">
  <div class="parallax"><img class="ateliers" src="views/img/fond2.jpg"></div>
  <img class="fond" src="views/img/ateliers.png" alt="">
</div>

<!-- Création section texte Ateliers  -->
<div class="section white">
  <div class="row container">
    <h1 class="titre" style="text-align:center;">Atelier d'introduction</h1>
    <h3 class="troistitre">Durée totale : 1h</h3>
    <div class="row">

      <div class="col s2" style="text-align:center;">
        <h2 class="deuxtitre">Durée</h2>
      </div>
      <div class="col s5" style="text-align:center;">
        <h2 class="deuxtitre">Activités</h2>
      </div>
      <div class="col s5" style="text-align:center;">
        <h2 class="deuxtitre">Objectifs pédagogiques</h2>
      </div>
    </div>
    <div class="bordure"></div>

    <!-- Texte en dessous de la bordure  -->
    <!-- 1ère Activité -->
    <div class="col s2" style="text-align:center;">
      <p class="text"> 10min.</p>
    </div>
    <div class="col s5" style="text-align:center;">
      <p class="text2" style="font-size:20px; padding-left: 33px;">Donner à chaque élève 2 post-it de couleurs
        différentes. Ils ont 1 minute top chrono pour écrire 2/3
        mots qui leur passe par la tête quand on dit le mot
        femme sur un post-it et pareil quand on dit le mot
        homme sur l'autre post-it. Récupérez les post-it et
        lisez-en quelques un à voix haute. Les faire réagir
        dessus.
      </p>
    </div>
    <div class="col s5" style="text-align:center;">
      <p class="text2" style="font-size:20px; padding-left: 13px;">Ce que l'on cherche ici, c'est la SPONTANÉITÉ des
        élèves. Ils ne savent pas vraiment de quoi l'atelier
        va parler, ils n'ont pas le temps de réfléchir. Le but
        et de faire ressortir les stéréotypes qu'ils peuvent
        avoir -> l'atelier se base ainsi sur leurs propres
        stéréotypes.
      </p>
    </div>

    <!-- 2ème Activité -->
    <div class="col s2" style="text-align:center;">
      <p class="text"> 10min.</p>
    </div>
    <div class="col s5" style="text-align:center;">
      <p class="text2" style="font-size:20px; padding-left: 33px;">Donner les définitions tout en faisant un lien avec
        leurs post-it :
        <ul style="font-size:19px;">
          <li>Stéréotype</li>
          <li>La différence entre le sexe et le genre</li>
          <li>Commenter la phrase "On ne nait pas femme, on le devient"</li>
        </ul>
      </p>
    </div>
    <div class="col s5" style="text-align:center;">
      <p class="text2" style="font-size:20px; padding-left: 13px;">Poser les bases de l'atelier avec les définitions, qu'ils
        retiennent plus facilement avec des exemples
        concrets qui sont leurs propres post-it. La phrase
        "On ne nait pas femme, on le devient" est une
        application directe de la distinction sexe/genre.
      </p>
    </div>



  </div>
  <ul class="pagination col s12" style="text-align:center">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="active"><a href="#!">2</a></li>
    <li class="active"><a href="#!">3</a></li>
  </ul>
</div>

<?php require "views/footer.php"; ?>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="views/lib/materialize/materialize.min.js"></script>
<script type="text/javascript" src="views/js/parallax.js"></script>
<script type="text/javascript" src="views/js/app.js"></script>
<script type="text/javascript" src="views/js/modal.js"></script>
</body>
</html>
