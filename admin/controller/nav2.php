
<!-- on verifie la presence des sessions -->
<?php $admin_connected = isset($_SESSION['identifiant'], $_SESSION['password']); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
              <div class="navbar-header">
              <button type='button' class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                   <img class="collogo" src="../../views/img/logo.png" width="100px" alt="">
                <ul class="nav navbar-nav">
                   <li><a href="../ateliers.php">Liste des ateliers</a></li>
                    <?php if($admin_connected) { ?>
                    <li> <?php echo '<a href="logout.php">Se deconnecter</a>'; ?> </li>
                    <li> <?php echo '<a href="settings.php?identifiant='. $_SESSION['identifiant'] .'">Parametrage du compte</a>'; ?> </li>
                    <?php } ?>
                </ul>
              </div>

            </div>

        </nav>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../../views/lib/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
