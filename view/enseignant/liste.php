<?php

session_start();
$user = $_SESSION["user"];

require_once("../../connexion_bd.php");
require_once("../../autoload.php");


$bd = bd();
$enseigManag = new EnseignantManager($bd);
$list = $enseigManag->liste();

if (isset($_GET['IdEnseignant'])) {
  $enseigManag->delete($_GET['IdEnseignant']);
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
                    <div style="text-align: right;">
                        <a href="../enseignant/new.php"><button class="btn btn-agile btn-block w-100"><strong>Ajouter un Nouveau Enregistrement d'Enseignant <span class="fas fa-users"></strong></button></a>
                    </div></br>
                    <div style="text-align: center;">
                        <h4 style="background-color: white;"><strong>LISTE DES ENSEIGNANTS ENREGISTRE</strong></h4>
                    </div>

                    <!-- slider tableau -->
                    <table style="background-color: white;" class="table table-bordered">

                        <thead>
                            <tr class='text-center'>
                                <th>N°</th>
                                <th>Nom </th>
                                <th>Prénom</th>
                                <th>Téléphone</th>
                                <th>N° CNIB</th>
                                <th>Modifier</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            <tr>
                                <?php
                                foreach ($list as $key => $value) {
                                ?>
                            <tr style="text-align: center;">
                                <td><?= $key + 1 ?></td>
                                <td><?= $value->NomEnseignant ?></td>
                                <td><?= $value->PrenomEnseignant ?></td>
                                <td><?= $value->TelEnseignant ?></td>
                                <td><?= $value->CNIB ?></td>

                                <td><a href="edit.php?IdEnseignant=<?= $value->IdEnseignant ?>" type="button"> <i class="fa fa-edit log"></i> </a></td>
                                <td><a href="detail.php?IdEnseignant=<?= $value->IdEnseignant ?>" type="button"> <i class="fa fa-user log"></i> </a></td>

                            </tr>
                        <?php
                                }
                        ?>

                    </table>

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