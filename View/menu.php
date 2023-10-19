<header class="menuh">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <img class="logo" src="../Img/channels4_profile.jpg    "> >
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href='index.php?Page=Accueil '> Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='index.php?Page=Page1'> Page1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='index.php?Page=Page2'> Page2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href='index.php?Page=Article'> Article</a>
                </li>
                <div class="connecté">
                    <?php
                    if (!isset($_SESSION['id'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link " href='index.php?Page=Inscription'> Inscription</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href='index.php?Page=Connexion'> Connexion</a>
                        </li>
                    <?php
                    } else {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link " href='/Controller/c_deconnexion.php'>Déconnexion</a>
                        </li>
                        <li class='navbar-item'> <a class="nav-link" href='index.php?Page=Profil'>Profil</a>
                        </li>
                    <?php
                    }
                    ?>
                </div>
            </ul>
        </div>
    </nav>
</header>