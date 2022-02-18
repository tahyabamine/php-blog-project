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

function resume(object $article): string
{
    $taille = 200;

    if (strlen($article->contenu) > $taille)
        $resume = substr($article->contenu, 0, $taille) . '...';
    else $resume = $article->contenue;

    return $resume;
}
