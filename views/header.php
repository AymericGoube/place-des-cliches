<nav ng-controller="dropCtrl">
  <div class="nav-wrapper nav1" >
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul id="nav-mobile" class="left hide-on-med-and-down">
      <li> <a href="#modal1"> DEVENIR BENEVOLE </a> </li>
      <!-- Modal contact -->
      <div id="modal1" class="container modal">
        <div class="modal-content">
          <img class="logoModal" src="views/img/logo.png" width="100px" alt="">
          <h1 class="titleModal">Agissons ensemble</h1>
          <?php require 'new_volunteer.php'; ?>

        </div>

      </div>

      <li> <a href=""> presse </a> </li>
    </ul>


    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li> <a href="#modal2" class="dropdown-btn btn" > S'inscrire </a> </li>
      <li> <a href="" class="dropdown-btn btn" ng-click="ShowHide()"> Se connecter </a> </li>
    </ul>
    <!-- Modal sinscrire -->
    <div id="modal2" class="modal">
    <div class="modal-content">
      <img class="logoModal" src="views/img/logo.png" width="100px" alt="">
      <h1 class="titleModal">Agissons ensemble</h1>
      <?php require 'subscribe.php'; ?>
    </div>
    </div>

    <div class="dropdown" ng-show="IsVisible">
      <form class="col s3">
        <div class="btn-drop input-field">
          <label for="identifiant">Votre identifiant</label>
          <input class="btn-connect" type="text" name="identifiant" value="">
        </div>

        <div class="btn-drop input-field">
          <label for="password">Votre mot de passe</label>
          <input class="btn-connect" type="text" name="password" value="">
        </div>

      </form>

    </div>


    <ul class="side-nav" id="mobile-demo">
      <li> <a href=""> agissons ensemble </a> </li>
      <li> <a href=""> presse </a> </li>
      <li> <a href="" class="dropdown-button btn" data-activates="login"> connexion </a> </li>
        <ul id="login" class="dropdown-content">
          <li> <a href=""> Utilisateur </a> </li>
        </ul>
      <li class="tab"> <a href=""> accueil </a> </li>
      <li class="tab"> <a href=".history" class="js-scrollTo"> l'association </a> </li>
      <li class="tab"> <a href=".partieEquipe" class="js-scrollTo"> notre équipe </a> </li>
      <li class="tab"> <a href=""> actualités </a> </li>
    </ul>

  </div>
</nav>

<div class="logo"></div>

<nav>
  <div class="nav-wrapper nav2">
    <ul id="nav-mobile" class="hide-on-med-and-down navmid">
      <li> <a href=""> accueil </a> </li>
      <li class="tab"> <a href=".history" class="js-scrollTo"> l'association </a> </li>
      <li class="tab"> <a href=".partieEquipe" class="js-scrollTo"> notre équipe </a> </li>
      <li class="tab"> <a href=""> actualités </a> </li>
    </ul>
  </div>
</nav>
