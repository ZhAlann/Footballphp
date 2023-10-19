<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
<base href="/">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="./CSS/newCascadeStyleSheet.css" rel="stylesheet">

<head>
    <meta charset="UTF-8">
    <title>TP 1</title>
    <?php
    session_start();


    if (isset($_SESSION['id'])) {
        include('./Modele/User.php');
        $utilisateurSession = unserialize($_SESSION['id']);
    }
    include('./view/menu.php');
    ?>
</head>

<body>
    <?php

    if (isset($_GET['Page'])) {
        $page = $_GET['Page'];
    } else {
        $page = 'Accueil';
    }
    switch ($page) {
        case "Accueil":
            include("./view/accueil.php");
            break;
        case "Page1":
            include("./view/page1.php");
            break;
        case "Page2":
            include("./view/page2.php");
            break;
        case "Inscription":
            include("./Controller/c_inscription.php");
            break;
        case "Connexion":
            include("./Controller/c_connexion.php");
            break;
        case "Article":
            include("./Controller/c_article.php");
            break;
        case "Profil":
            include("./Controller/c_profil.php");
            break;
        case "Commentaire":
            if (isset($_GET['idArticle']) && empty($_GET['idArticle'])) {
                include('./Controller/c_accueil.php');
                break;
            } else {
                include('./Controller/c_commentaire.php');
                break;
            }
    }
    ?>
</body>

</html>