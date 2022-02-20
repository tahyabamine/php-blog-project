<?php
session_start();
include_once 'functions.php';
seConnecter();

if (!empty($_GET['route'])) $route = $_GET['route'];
else $route = 'accueil';

switch ($route) {
    case 'accueil':
        include path('controller', 'accueil-controller');
        break;
    case 'list-articles':
        include path('controller', 'articles-controller');
        liste();
        break;
    case 'details-article':
        include path('controller', 'articles-controller');
        details();
        break;
    case 'ajout-article':
        include path('controller', 'articles-controller');
        ajouter();
        break;
    case 'modif-article':
        include path('controller', 'articles-controller');
        modification();
        break;
    case 'supp-article':
        include path('controller', 'articles-controller');
        supprimer();
        break;
    case 'connexion':
        include path('controller', 'authentication-controller');
        connexion();
        break;
    case 'deconnexion':
        include path('controller', 'authentication-controller');
        deconnexion();
        break;
    default:
        erreur(404);
}
