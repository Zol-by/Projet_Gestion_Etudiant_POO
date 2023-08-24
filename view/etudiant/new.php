<?php

session_start();
$user = $_SESSION["user"];

require_once("../../connexion_bd.php");
require_once("../../autoload.php");

$bd = bd();

$filiere = new FiliereManager($bd); 
$listFili = $filiere->liste();

$etudiant = new EtudiantManager($bd); 
$listMatie = $etudiant->liste();

if (isset($_POST['IdFiliere']) and $_POST['NomEtudiant'] and $_POST['PrenomEtudiant'] and $_POST['TelEtudiant'] and $_POST['PaysEtudiant'] and $_FILES['PhotoEtudiant']) {

  move_uploaded_file($_FILES['PhotoEtudiant']['tmp_name'], '../../fonts/photos/' . $_POST['NomEtudiant'] . 'photo.jpg'); $_POST['PhotoEtudiant'] = '../../font/photos/' . $_POST['NomEtudiant'] . 'photo.jpg';

  $etudManager = new EtudiantManager($bd);
  $etud = new Etudiant($_POST);
  $etudManager->add($etud);
  
  header("location: liste.php");
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
            <h4 style="color: white;"><strong><u>ENREGISTREMENT D'UN ETUDIANT</u></strong></h4>
          </div>

          <!-- slider tableau -->
          <form action="new.php" method="post" class="register-wthree" enctype="multipart/form-data">
          <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <label for="">Nom de l'etudiant</label>
                  <input class="form-control" type="text" placeholder="KY" name="NomEtudiant" required="">
                </div>

                <div class="col-md-6 mt-md-0 mt-2">
                  <label for="">Prénom de l'etudiant</label>
                  <input class="form-control" type="text" placeholder="Johnson" name="PrenomEtudiant" required="">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <label for="">Téléphone de l'etudiant</label>
                  <input class="form-control" type="number" placeholder="+22622334455" name="TelEtudiant" required="">
                </div>

                <div class="col-md-6 mt-md-0 mt-2">
                  <label for="">Pays de l'etudiant</label>
                  <input class="form-control" type="text" placeholder="République Centrafricaine" name="PaysEtudiant" required="">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <label for="">Nom de la filère</label>
                  <select name="IdFiliere" class="form-control" required="">
                    <option value="">Veuillez choisir la matiere svp</option>
                    <?php
                      foreach ($listFili as $key) {
                      ?>
                        <option value="<?php echo $key->IdFiliere ?>"><?php echo $key->NomFiliere ?></option>;
                      <?php
                      }
                    ?>
                </select>
                </div>

                <div class="col-md-6 mt-md-0 mt-2">
                <label for="">Photo de l'etudiant</label>
                  <input type="file" class="form-control" name="PhotoEtudiant" required="">
                </div>
              </div>
            </div>

            <div class="mt-4">
              <button type="submit" class="btn btn-primary btn-block w-100"><strong>ENREGISTRER L'ETUDIANT</strong></button></br>
            </div>
          </form>
          <a href="../etudiant/liste.php" class="mr-lg-3 mt-lg-0 mt-4" ><button class="btn btn-agile btn-block w-30"><strong>ANNULER L'ENREGISTREMENT</strong></button></a>
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