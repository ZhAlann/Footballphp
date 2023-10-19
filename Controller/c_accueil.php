<?php
include('./Modele/GestionBDD.php');
include('./Modele/UserManager.php');

$BDD = new GestionBDD('DB_ligue');
$cnx = $BDD->connect();

$GU = new UserManager($cnx);

$nom = $utilisateurSession->getNom_uti();
$prenom = $utilisateurSession->getPrenom_uti();

include("./View/accueil.php");
$cnx = null;
