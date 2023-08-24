<?php

session_start();
$user = $_SESSION["user"];

require_once("../../connexion_bd.php");
require_once ("../../autoload.php");

$bd= bd();
$MatieManag=new MatiereManager($bd);

if(isset($_POST['IdMatiere']) and $_POST['NomMatiere'] and $_POST['NiveauEtude'] and $_POST['DateMatiere'])
{
    $MatieManag =new MatiereManager($bd);
    $Mati=new Matiere($_POST);
    $MatieManag->edit($Mati);
    header("location: liste.php");
}

if(isset($_GET['IdMatiere']))
{
    $IdMatiere=$_GET['IdMatiere'];
    $value=$MatieManag->get($IdMatiere);
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
            <h4 style="color: white;"><strong> <u>MODIFICATION DE LA MATIERE N° : <?= $value->IdMatiere?></u></strong></h4>
          </div>

          <!-- slider tableau -->
          <form action="#" method="get" class="register-wthree">
          <div class="form-group">
              <div class="row">
                <div class="col-md-12">
                  <label>
                    Nom de la Matière
                  </label>
                  <input class="form-control" type="text" name="NomMateire" value="<?= $value->NomMatiere ?>">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-12">
                  <label>
                    Choisir le niveau étude
                  </label>
                  <input class="form-control" type="text" name="NomMateire" value="<?= $value->NiveauEtude ?>">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-12">
                  <label>
                    Date du jour
                  </label>
                  <input type="date" class="form-control"  name="DateMatiere" value="<?= $value->DateMatiere ?>">
                </div>
              </div>
            </div>
            <div class="mt-4">
              <button type="submit" class="btn btn-primary btn-block w-100"><strong>ENREGISTRER LA MODIFICATION</strong></button></br>
            </div>
          </form>
          <a href="../matiere/liste.php" class="mr-lg-3 mt-lg-0 mt-4" title="Gestion des étudiants"><button class="btn btn-agile btn-block w-30"><strong>ANNULER L'ENREGISTREMENT</strong></button></a>
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