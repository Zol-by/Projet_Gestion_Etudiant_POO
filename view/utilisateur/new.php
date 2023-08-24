<?php 

session_start();
$user = $_SESSION["user"];


require_once ("../../connexion_bd.php");
require_once ("../../autoload.php");

$bd= bd();
$UtilisateurM =new UtilisateurManager($bd);

if(isset($_POST['iduser']) and $_POST['Nom'] and $_POST['prenom'] and $_POST['username'] and $_POST['password'] and $_POST['statut'] )
{
    $UtilisateurM =new UtilisateurManager($bd);

    $Utilisateur=new Utilisateur($_POST);

    $UtilisateurM->add($Utilisateur);

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
            <h4 style="color: white;"><strong><u>ENREGISTREMENT D'UN UTILISATEUR</u></strong></h4>
          </div>

          <!-- slider tableau -->
          <form action="new.php" method="post" class="register-wthree">
            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <span style="color: white;" class="fas fa-user"></span>
                  <label>
                    Nom
                  </label>
                  <input class="form-control" type="text" placeholder="KY" name="nom" required="">
                </div>

                <div class="col-md-6 mt-md-0 mt-2">
                  <label>
                    Prénom
                  </label>
                  <input class="form-control" type="text" placeholder="Johnson" name="prenom" required="">
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
                  <input class="form-control" type="text" placeholder="example@email.com" name="username" required="">
                </div>

                <div class="col-md-6 mt-md-0 mt-2">
                <span style="color: white;" class="fas fa-lock"></span>
                  <label>
                    Mot de passe
                  </label>
                  <input type="text" class="form-control" placeholder="*******" name="password" required="">
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
                  <input type="text" class="form-control" placeholder="Enseignant" name="statut"  required="">
                </div>
              </div>
            </div>
            <div class="mt-4">
              <button type="submit" class="btn btn-primary btn-block w-100"><strong>ENREGISTRER L'UTILISATEUR</strong></button></br>
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
  <!-- //smooth-scrolling-of-move-up -->
  <!-- Bootstrap Core JavaScript -->
  <script src="../../js/bootstrap.js">
  </script>
</body>

</html>