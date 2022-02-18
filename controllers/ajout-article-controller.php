<?php

if (!empty($_POST)) {

    if (
        !empty($_POST['titre'])
        && !empty($_POST['image'])
        && !empty($_POST['contenu'])
        && !empty($_POST['auteur'])


        && filter_var($_POST['image'], FILTER_SANITIZE_URL) !== false





    ) {

        require_once __DIR__ . '/../models/Article.php';
        $article = new Article;

        $article->titre = $_POST['titre'];
        $article->image = $_POST['image'];
        $article->contenu = $_POST['contenu'];
        $article->auteur = $_POST['auteur'];
        $article->date_de_publication = $_POST['date'];

        $article->save(); // Je sauvegarde (ça envoie à la BDD)

        redirection('list-articles');
    } else die('error');
}
include_once './views/ajout-article.php';
