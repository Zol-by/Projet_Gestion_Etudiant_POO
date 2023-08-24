<?php

session_start();
$user = $_SESSION["user"];

require_once("../../connexion_bd.php");
require_once("../../autoload.php");

$bd = bd();
$UtilManag = new UtilisateurManager($bd);

if (isset($_POST['iduser']) and $_POST['nom'] and $_POST['prenom'] and $_POST['username'] and $_POST['password'] and $_POST['statut']) {
  $UtilManag = new UtilisateurManager($bd);

  $Util = new Utilisateur($_POST);

  $UtilManag->edit($Util);

  header("location: liste.php");
}

if (isset($_GET['iduser'])) {
  $iduser = $_GET['iduser'];

  $value = $UtilManag->get($iduser);
}
?>
<!DOCTYPE HTML>
<html lang="zxx">

<?php
include('../../include/head.php');
?>

<body>
  <div class="se-pre-con"></div>
  <!-- header -->
  <?php
  include('../../include/header.php');
  ?>
  <!-- //header -->

  <!-- banner -->
  <!-- Carousel -->
  <div class="row justify-content-center align-items-center no-gutters banner-agile">
    <div class="col-lg-8">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <div class="container">

          <div style="text-align: center;">
            <h4 style="color: white;"><strong><u>MODIFICATION D'UTILISATEUR N° : <?= $value->iduser?></u></strong></h4>
          </div>

          <!-- slider tableau -->
          <form action="#" method="get" class="register-wthree">
          <div class="form-group">
              <div class="row">
                <div class="col-md-12">
                  <input type="hidden" class="form-control" name="iduser" value="<?= $value->iduser ?>">
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <span style="color: white;" class="fas fa-user"></span>
                  <label>
                    Nom
                  </label>
                  <input class="form-control" type="text" name="nom" value="<?= $value->nom ?>">
                </div>

                <div class="col-md-6 mt-md-0 mt-2">
                  <label>
                    Prénom
                  </label>
                  <input class="form-control" type="text" name="prenom" value="<?= $value->prenom ?>">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                <span style="color: white;" class="fas fa-envelope-open"></span>
                  <label>
                    Identifiant
                  </label>
                  <input class="form-control" type="text" name="Identifiant" value="<?= $value->username ?>">
                </div>

                <div class="col-md-6 mt-md-0 mt-2">
                <span style="color: white;" class="fas fa-lock"></span>
                  <label>
                    Mot de passe
                  </label>
                  <input type="password" class="form-control" name="password" value="<?= $value->password ?>">
                </div>
              </div>
            </div>
        
            <div class="form-group">
              <div class="row">
                <div class="col-md-12">
                  <span style="color: white;" class="fas fa-user"></span>
                  <label>
                    Statut
                  </label>
                  <input type="text" class="form-control" name="statut" value="<?= $value->statut ?>">
                </div>
              </div>
            </div>

            <div class="mt-4">
              <button type="submit" class="btn btn-primary btn-block w-100"><strong>ENREGISTRER LA MODIFICATION</strong></button></br>
            </div>
          </form>
          <a href="../utilisateur/liste.php" class="mr-lg-3 mt-lg-0 mt-4"><button class="btn btn-agile btn-block w-30"><strong>ANNULER L'ENREGISTREMENT</strong></button></a>
        </div>
      </div>
      <!-- Carousel -->
      <!-- //banner -->
    </div>

    <div class="col-lg-4">
      <div class="wthree-form">
        <h4 style="text-align: center;">
          <strong>
            MENU DE NAVIGATION
          </strong>
        </h4>

        <?php
        include('../../include/menu.php');
        ?>

      </div>
    </div>
  </div>
  <!-- //carousel -->
  <!-- //banner -->

  <!-- footer -->
  <?php
  include('../../include/footer.php');
  ?>

  <!-- //footer -->

  <!-- js-->
  <script src="../../js/jquery-2.2.3.min.js"></script>
  <!-- loading-gif Js -->
  <script src="../../js/modernizr.js"></script>
  <script>
    $(window).load(function() {
      // Animate loader off screen
      $(".se-pre-con").fadeOut("slow");;
    });
  </script>
  <!-- Multiple select filter using jQuery -->
  <script src="../../js/custom-select.js"></script>
  <!-- start-smooth-scrolling -->
  <script src="../../js/move-top.js">
  </script>
  <script src="../../js/easing.js"></script>
  <script>
    jQuery(document).ready(function($) {
      $(".scroll").click(function(event) {
        event.preventDefault();

        $('html,body').animate({
          scrollTop: $(this.hash).offset().top
        }, 1000);
      });
    });
  </script>
  <!-- smooth-scrolling-of-move-up -->
  <script>
    $(document).ready(function() {

      $().UItoTop({
        easingType: 'easeOutQuart'
      });

    });
  </script>
  <script src="../../js/SmoothScroll.min.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="../../js/bootstrap.js">
  </script>
</body>

</html>










