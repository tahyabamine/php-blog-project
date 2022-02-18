<?php
include_once './models/Article.php';

if (empty($_GET['id'])) die('Erreur 404');

// On appelle le modèle
$article = Article::retrieveByPK($_GET['id']);

if (empty($article)) die('Erreur 404');

// On appelle la vue
include __DIR__ . '/../views/details-article.php';
