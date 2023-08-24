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
            <nav class="navbar navbar-expand-lg navbar-right p-0">
                <h4>
                    <a href="../../index.php"> <span class="fas fa-sign-in-alt flash animated infinite"></span> <strong>DECONNEXION</strong></a>
                </h4>
                <button class="navbar-toggler ml-lg-auto ml-sm-5" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
    </div>
</header></br>