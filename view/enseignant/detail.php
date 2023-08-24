<?php
session_start();
$user = $_SESSION["user"];

require_once("../../connexion_bd.php");
require_once("../../autoload.php");

$bd = bd();

$matiere = new MatiereManager($bd);
$listMatie = $matiere->liste();

$enseiManager = new EnseignantManager($bd);
$enseig = new Enseignant($_POST);

$enseiManager->liste($enseig);

if (isset($_GET['IdEnseignant'])) {

  $IdEnseignant = $_GET['IdEnseignant'];

  $value = $enseiManager->get($IdEnseignant);
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
            <h4 style="color: white;"><strong><u>DETAIL DE L'ENSEIGNANT N° : <?= $value->IdEnseignant ?></u></strong></h4>
          </div>
          <!-- slider tableau -->
          <form action="#" method="post" class="register-wthree">
            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <label for="">Nom de l'enseignant</label>
                  <span class="form-control"><?= $value->NomEnseignant?></span>
                </div>

                <div class="col-md-6 mt-md-0 mt-2">
                  <label for="">Prénom de l'enseignant</label>
                  <span class="form-control"><?= $value->PrenomEnseignant?></span>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <label for="">Téléphone de l'enseignant</label>
                  <span class="form-control"><?= $value->TelEnseignant?></span>
                </div>

                <div class="col-md-6 mt-md-0 mt-2">
                  <label for="">N° CNIB de l'enseignant</label>
                  <span class="form-control"><?= $value->CNIB?></span>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-12">
                  <label for="">Nom de la matière enseigné</label>

                  <select class="form-control" name="matière">
                    <?php
                    foreach ($listMatie as $key) {
                    ?>
                      <option value="<?php echo $key->IdMatiere ?>"><?php echo $key->NomMatiere ?></option>;
                    <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
              <span class="form-control"><img src="<?= $value->PhotoEnseignant ?>"></span>
              </div>
            </div></br>

          </form>
          <a href="../enseignant/liste.php" class="mr-lg-3 mt-lg-0 mt-4"><button class="btn btn-agile btn-block w-30"><strong>FERMER LA PAGE DE DETAIL</strong></button></a>
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