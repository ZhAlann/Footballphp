<?php

include('./Modele/GestionBDD.php');
include('./Modele/ArticleManager.php');
include('./Modele/Article.php');

$BDD = new GestionBDD('DB_Ligue');
$cnx = $BDD->connect();

$GA = new ArticleManager($cnx);
$tableResultArticle = $GA->getAllArticleByTitle();

include("./View/article.php");

$cnx = null;
