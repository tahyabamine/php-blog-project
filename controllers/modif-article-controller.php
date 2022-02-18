<?php
require_once __DIR__ . '/../models/Article.php';
if (!empty($_GET['id']))
    $article = Article::retrieveByPK($_GET['id']); // Retrieve by ID (retrieve one)


if (empty($article)) // Le contact est vide si : 1/ il a pas été trouvé ou 2/ on n'est pas rentré dans le if ligne 7
    erreur(404);


if (!empty($_POST)) {

    if (
        !empty($_POST['titre'])
        && !empty($_POST['image'])
        && !empty($_POST['contenu'])
        && !empty($_POST['auteur'])


        && filter_var($_POST['image'], FILTER_SANITIZE_URL) !== false

        && date_create_from_format('Y-m-d', $_POST['date'])



    ) {
        $article->titre = $_POST['titre'];
        $article->image = $_POST['image'];
        $article->contenu = $_POST['contenu'];
        $article->auteur = $_POST['auteur'];
        // $article->date_de_publication = $_POST['date'];

        $article->save(); // Je sauvegarde (ça envoie à la BDD)

        redirection('list-articles');
    } else die('error');
}
include_once './views/modif-article.php';
