<?php

session_start();
$user = $_SESSION["user"];

require_once("../../connexion_bd.php");
require_once("../../autoload.php");

$bd = bd();

$filiere = new FiliereManager($bd);
$listfilier = $filiere->liste();

$etudManager = new EtudiantManager($bd);
$etud = new Etudiant($_POST);

$etudManager->liste($etud);

if (isset($_GET['IdEtudiant'])) {
  $IdEtudiant = $_GET['IdEtudiant'];

  $value = $etudManager->get($IdEtudiant);
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
            <h4 style="color: white;"><strong><u>DETAIL DE L'ENSEIGNANT N° : <?= $value->IdEtudiant ?></u></strong></h4>
          </div>
          <!-- slider tableau -->
          <form action="#" method="post" class="register-wthree">
            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                <label for="">Nom de l'etudiant</label>
                <span class="form-control"><?= $value->NomEtudiant?></span>
                </div>

                <div class="col-md-6 mt-md-0 mt-2">
                  <label for="">Prénom de l'etudiant</label>
                  <span class="form-control"><?= $value->PrenomEtudiant?></span>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                <label for="">Téléphone de l'etudiant</label>
                  <span class="form-control"><?= $value->TelEtudiant?></span>
                </div>

                <div class="col-md-6 mt-md-0 mt-2">
                  <label for="">Pays de l'etudiant</label>
                  <span class="form-control"><?= $value->PaysEtudiant?></span>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-12">
                  <label for="">Nom de la filière choisi</label>
                  <select class="form-control" name="matière">
                    <?php
                    foreach ($listfilier as $key) {
                    ?>
                      <option value="<?php echo $key->IdFiliere ?>"><?php echo $key->NomFiliere ?></option>;
                    <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <span class="form-control"><img src="<?= $value->PhotoEtudiant ?>"></span>
              </div>
            </div></br>

          </form>
          <a href="../etudiant/liste.php" class="mr-lg-3 mt-lg-0 mt-4"><button class="btn btn-agile btn-block w-30"><strong>FERMER LA PAGE DE DETAIL</strong></button></a>
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
  <!-- //smooth-scrolling-of-move-up -->
  <!-- Bootstrap Core JavaScript -->
  <script src="../../js/bootstrap.js">
  </script>
</body>

</html>