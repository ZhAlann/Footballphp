<?php
if (isset($_SESSION['id'])) {
    header("Location: /index.php?Page=Accueil");
}

if (isset($_POST['submit'])) {


    include('./Modele/User.php');
    include('./Modele/GestionBDD.php');
    include('./Modele/UserManager.php');

    if (isset($_REQUEST['username']) && !(empty($_REQUEST['username'])) && isset($_REQUEST['password']) && !(empty($_REQUEST['password']))) {

        $BDD = new GestionBDD('DB_ligue');
        $cnx = $BDD->connect();

        $GU = new UserManager($cnx);


        $mailConnexion = $_REQUEST['username'];
        $mdpConnexion = $_REQUEST['password'];


        if ($GU->existUser($mailConnexion, $utilisateur)) {

            if (password_verify($mdpConnexion, $utilisateur->getPassword_uti())) {
                $utilisateur = serialize($utilisateur);
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                } else {


                    $_SESSION["id"] = $utilisateur;
                    header("Location: /index.php?Page=Profil");
                }
            } else {
                header("Location: /index.php?Page=Connexion");
                $utilisateur = null;
            }
        } else {
            header("Location: /index.php?Page=Connexion");
        }
    } else {
        header("Location: /index.php?Page=Connexion");
    }

    $cnx = null;
} else {
    include("./View/connexion.php");
}
