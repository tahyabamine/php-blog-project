<?php

include_once 'functions.php';
seConnecter();

if (!empty($_GET['route'])) $route = $_GET['route'];
else $route = 'accueil';

switch ($route) {
    case 'accueil':
        include __DIR__ . '/controllers/accueil-controller.php';
        break;
    case 'list-articles':
        include __DIR__ . '/controllers/list-articles-controller.php';
        break;
    case 'details-article':
        include __DIR__ . '/controllers/details-article-controller.php';
        break;
    case 'ajout-article':
        include __DIR__ . '/controllers/ajout-article-controller.php';
        break;
    default:
        die('Erreur 404');
}
