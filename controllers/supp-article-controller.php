<?php
require_once './models/Article.php';
if (empty($_GET['id'])) erreur(404);

// On appelle le modèle
$article = Article::retrieveByPK($_GET['id']);


if (empty($article)) erreur(404);

$article->delete();

redirection('list-articles');
