<?php
if (!(isset($_SESSION['id']))) {
    header("Location: index.php?page=Connexion");
}


include('./Modele/GestionBDD.php');
include('./Modele/UserManager.php');
include('./Modele/ClubManager.php');
include('./Modele/Club.php');
$BDD = new GestionBDD('DB_ligue');
$cnx = $BDD->connect();

$GU = new UserManager($cnx);
$name = $utilisateurSession->getNom_uti();
$img = $utilisateurSession->getImage_uti();
$idclubuser = $utilisateurSession->getId_club();
$GC = new ClubManager($cnx);
$idclubusers = $GC->getClubuser($idclubuser);
include("./View/profil.php");

$cnx = null;
