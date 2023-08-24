<?php

session_start();
$user = $_SESSION["user"];

require_once("../../connexion_bd.php");
require_once ("../../autoload.php");

$bd= bd();
$FilManag=new FiliereManager($bd);

if(isset($_POST['IdFiliere']) and $_POST['NomFiliere'] and $_POST['Departement'] and $_POST['Date'])
{
    $FilManag =new FiliereManager($bd);
    $Fil=new Filiere($_POST);
    $FilManag->edit($Fil);
    header("location: liste.php");
}

if(isset($_GET['IdFiliere']))
{
    $IdFiliere=$_GET['IdFiliere'];
    $value=$FilManag->get($IdFiliere);
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
            <h4 style="color: white;"><strong><u>MODIFICATION DE LA FILIERE N° : <?= $value->IdFiliere?></u></strong></h4>
          </div>

          <!-- slider tableau -->
          <form action="#" method="get" class="register-wthree">
          <div class="form-group">
              <div class="row">
                <div class="col-md-12">
                  <input type="hidden" class="form-control" name="IdFiliere" value="<?= $value->IdFiliere?>">
                </div>
              </div>
            </div>

          <div class="form-group">
              <div class="row">
                <div class="col-md-12">
                  <label>
                    Nom de la Filiere
                  </label>
                  <input class="form-control" type="text" name="NomFiliere" value="<?= $value->NomFiliere?>">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-12">
                  <label>
                    Département
                  </label>
                  <input type="text" class="form-control" name="Departement" value="<?= $value->Departement?>">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-12">
                  <label>
                    Date du jour
                  </label>
                  <input type="date" class="form-control"  name="Date"  value="<?= $value->Date?>">
                </div>
              </div>
            </div>
            <div class="mt-4">
              <button type="submit" class="btn btn-primary btn-block w-100"><strong>ENREGISTRER LA MODIFICATION</strong></button></br>
            </div>
          </form>
          <a href="../filiere/liste.php" class="mr-lg-3 mt-lg-0 mt-4"><button class="btn btn-agile btn-block w-30"><strong>ANNULER L'ENREGISTREMENT</strong></button></a>
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