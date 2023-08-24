<?php
    session_start();
    $user = $_SESSION["user"];
?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>GESTION ETUDIANTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- CSS -->
    <!-- animation -->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">

    <!-- online fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Gentium+Book+Basic:400,400i,700i" rel="stylesheet">

</head>

<body>
    <div class="se-pre-con"></div>
    <!-- header -->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="d-flex header-agile">
                            <li>
                                <span class="fas fa-envelope-open"></span>
                                <a href="mailto:example@email.com" class="text-white">info@uts.com</a>
                            </li>
                            <li>
                                <span class="fas fa-phone-volume"></span>
                                <p class="d-inline text-white">+226 64150757</p>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-6 hearder-right-agile">
                        <div class="d-flex">
                            <div class="login-wthree my-auto">
                                <a href="accueil.php" class="text-white text-capitalize"> <span class="fas fa-sign-in-alt flash animated infinite"></span> <?= $user["nom"]; ?> <?= $user["prenom"]; ?> est connecté </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="header-bottom">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <h4>
                        <a href="index.php"> <span class="fas fa-sign-in-alt flash animated infinite"></span> <strong>DECONNEXION</strong></a>
                    </h4>
                    <button class="navbar-toggler ml-lg-auto ml-sm-5" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                </nav>
            </div>
        </div>
    </header>
    <!-- //header -->

    <!-- banner -->
    <!-- Carousel -->
    <div class="row justify-content-center align-items-center no-gutters banner-agile">
        <div class="col-lg-8">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item bg5 active">
                        <div class="bnr-text-wthree">
                            <h3 class="b-w3ltxt">BINVENUE SUR NOTRE</h3>
                            <p class="mx-auto text-capitalize mt-2 text-white">
                                Application web de gestion des étudiants
                            </p>
                        </div>
                    </div>
                    <!-- slider text -->
                    <div class="carousel-item bg6">
                        <div class="bnr-text-wthree">
                        <h3 class="b-w3ltxt">BINVENUE SUR NOTRE</h3>
                            <p class="mx-auto text-capitalize mt-2 text-white">
                                Application web de gestion des étudiants
                            </p>
                        </div>
                    </div>
                    
                    <!-- slider text -->
                </div>
            </div>

        </div>
        <!-- Carousel -->
        <!-- //banner -->
        <div class="col-lg-4">
            <div class="wthree-form">
                <div class="mr-lg-3 mt-lg-0 mt-4">
                    <h4 style="text-align: center;">
                        <strong >
                            MENU DE NAVIGATION
                        </strong>
                    </h4>
                </div>

                <div style="text-align: center;">
                    <a  href="accueil.php" class="mr-lg-3 mt-lg-0 mt-4" title="Accueil"><button class="btn btn-agile btn-block w-30"><strong>PAGE D'ACCUEIL</strong></button></a>
                    <a  href="view/etudiant/liste.php" class="mr-lg-3 mt-lg-0 mt-4" title="Gestion des étudiants"><button class="btn btn-agile btn-block w-30"><strong>GESTION DES ETUDIANTS</strong></button></a>
                    <a  href="view/filiere/liste.php" class="mr-lg-3 mt-lg-0 mt-4" title="Gestion des filières"><button class="btn btn-agile btn-block w-30"><strong>GESTION DES FILIERES</strong></button></a>
                    <a  href="view/matiere/liste.php" class="mr-lg-3 mt-lg-0 mt-4" title="Gestion des matières"><button class="btn btn-agile btn-block w-30"><strong>GESTION DES MATIERES</strong></button></a>
                    <a  href="view/enseignant/liste.php" class="mr-lg-3 mt-lg-0 mt-4" title="Gestion des enseignants"><button class="btn btn-agile btn-block w-30"><strong>GESTION DES ENSEIGNANTS</strong></button></a>
                    <a  href="view/utilisateur/liste.php" class="mr-lg-3 mt-lg-0 mt-4" title="Gestion des utilisateurs"><button class="btn btn-agile btn-block w-30"><strong>GESTION DES UTILISATEURS</strong></button></a>
                </div>

            </div>
        </div>
    </div>
    <!-- //carousel -->
    <!-- //banner -->

    <!-- footer -->
    <footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="social-icons d-flex  my-auto justify-content-lg-start justify-content-center">
                    <h2 class="mr-4">Suivez-nous :</h2>
                    <ul class="social-iconsv2 agileinfo">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 my-lg-auto mt-3">
                <div class="cpy-right text-lg-right text-center">
                    <p class="text-secondary">© 2023. All rights reserved | Design by
                        <a href="#"> Groupe 3</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
    <!-- //footer -->

    <!-- js-->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- loading-gif Js -->
    <script src="js/modernizr.js"></script>
    <script>
        $(window).load(function() {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <!-- Multiple select filter using jQuery -->
    <script src="js/custom-select.js"></script>
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js">
    </script>
    <script src="js/easing.js"></script>
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
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js">
    </script>
</body>

</html>