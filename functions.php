<?php
include_once 'config.php';

function seConnecter()
{
    include_once './models/SimpleOrm.php';
    $conn = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD);

    if ($conn->connect_error)
        die(sprintf('Unable to connect to the database. %s', $conn->connect_error));

    SimpleOrm::useConnection($conn, DATABASE_NAME);
}

function resume(object $article, $taille = 200): string
{

    if (strlen($article->contenu) > $taille)
        $resume = substr($article->contenu, 0, $taille) . '...';
    else $resume = $article->contenue;

    return $resume;
}

function redirection($route)
{
    header('Location: ' . url($route));
    die;
}
function validateDate($date): bool
{
    $reg = "#/^[0-9]{4}(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])[A-Za-z](0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])$(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])$/#";

    return boolval(preg_match($reg, $date));
}

function erreur($code)
{
    die('Erreur' . $code);
}
function path(string $type, string $nom): string
{
    if ($type != 'model' && $type != 'view' && $type != 'controller') erreur(404);

    return __DIR__ . '/' . $type . 's/' . $nom . '.php';
}
function url(string $route = 'accueil'): string
{
    return 'index.php?route=' . $route;
}
