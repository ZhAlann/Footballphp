<?php
$BDD = new GestionBDD("BDD_Club");
$cnx = $BDD->connect();
?>
<div class="container">
        <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                        <form action="./Controller/c_inscription.php" method="post">
                                <h1 class="box-title">Inscription</h1>
                                <br>Prénom : <input type="text" name="firstname" id="nom" required="" /> <br>
                                <br>Nom : <input type="text" name="name" /><br>
                                <br>Mail : <input type="email" id="idmail" name="email" /><br>
                                <br>Mot de passe : <input type="password" id="idpassword" name="password" minlength="8"><br>
                                <br> Sexe : <input type="radio" checked name="gender" value="H">Homme
                                <input type="radio" name="gender" value="F">Femme
                                <br>
                                <br> Photo de profil : <input type="file" id="idpdp" name="pic" accept="image/png,image/jpeg"><br>


                                <br>
                                <div class="form-group" name="team">
                                        <label for="idClubFavori">Votre Club favori </label>
                                        <select class="form-select" id="idClubFavori" aria-label="Choix du club favoris" name="favori">
                                                <option value="1" selected>Choisi ton club favori</option>
                                                <?php $BDD->getClubIntoSelect($cnx) ?>
                                        </select>
                                </div>
                                <br>

                                <input type="submit" value="Créer le compte" name="valid" class="box-button">


                        </form>
                </div>
        </div>
</div>