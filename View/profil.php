    <div class=" p-5">

        <!--<button onclick="afficheDiv()" class="button is-rounded m-5">Changer de photo de profil</button>-->
    </div>
    <div class="profils">
        <div class="container">
            <div class="row">
                <h2 class="box-title"> Profil :</h2>
                <div class="col-3"></div>
                <div class="col-8">
                    <div class="profil">

                        <img class="rounded-full border-2 border-black m-5" src="../Img/compte-utilisateur-1.png    ">
                        <?php // echo $img 
                        ?>
                        <h2><?php echo "Nom : " . $utilisateurSession->getNom_uti() ?></h2>
                        <h2><?php echo "Prénom : " . $utilisateurSession->getPrenom_uti() ?></h2>
                        <h2><?php echo "Votre club favori : " . $idclubusers;
                            ?></h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--
<script>
    function afficheDiv() {
        alert("ok");
    }
</script> -->