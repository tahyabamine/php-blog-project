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
    header('Location: index.php?route=' . $route);
    die;
}
function validatDate($date)
{
    $reg = '#/^\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])$/#';

    return boolval(preg_match($reg, $date));
}
