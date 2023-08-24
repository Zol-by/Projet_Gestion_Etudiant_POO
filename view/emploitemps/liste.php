
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
                        <a href="../emploitemps/new.php"><button class="btn btn-agile btn-block w-50"><strong>Nouveau Programme du Cours <span class="fas fa-folder"></strong></button></a>
                    </div></br>

                    <div style="text-align: center;">
                        <h4 style="background-color: white;"><strong >LISTE DES EMPLOIS DU TEMPS DES COURS</strong></h4>
                    </div>
                
                    <!-- slider tableau -->
                    <table style="background-color: white;" class="table table-bordered">
                        <tbody>
                            <tr class='text-center'>
                            <th>Photo</th>
                            <th>Nom</th>
                            <th>Prénoms</th>
                            <th>Sexe</th>
                            <th>Lilières</th>
                            <th>Téléphone</th>
                            </tr>
                        </tbody>

                            <tr class='text-center'>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                            </tr>
                            <tr class='text-center'>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                            </tr>
                            <tr class='text-center'>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                            </tr>
                            <tr class='text-center'>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                            </tr><tr class='text-center'>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                            </tr><tr class='text-center'>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                            </tr><tr class='text-center'>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                            </tr>
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
        $(window).load(function () {
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
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
           
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