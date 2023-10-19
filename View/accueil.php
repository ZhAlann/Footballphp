<div class="accueil">
        <br>
        <h2>
                <?php
                if (isset($_SESSION['id'])) {
                        echo "Bonjour " .  $utilisateurSession->getNom_uti() . " " . $utilisateurSession->getPrenom_uti() . "</br>" .  " Bienvenue sur le site Ligue 1";
                } else {
                        echo "Bonjour à tous" . "</br>" . " Bienvenue sur le site Ligue 1";
                }
                ?>
        </h2>
</div>