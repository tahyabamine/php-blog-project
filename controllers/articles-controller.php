<?php
require_once path('model', 'Article');
require_once path('model', 'Commentaire');

function ajouter()
{
    if ($_SESSION['role'] === "admin") {
        if (!empty($_POST)) {

            if (
                !empty($_POST['titre'])
                && !empty($_POST['image'])
                && !empty($_POST['contenu'])
                && !empty($_POST['auteur'])


                && filter_var($_POST['image'], FILTER_SANITIZE_URL) !== false

                && preg_match("#/^[0-9]{4}(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])[A-Za-z](0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])$(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])$/#", $_POST['date']) !== false


            ) {


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
        include_once path('view', 'ajout-article');
    } else erreur(404);
}
function supprimer()
{
    if ($_SESSION['role'] === "admin") {


        if (empty($_GET['id'])) erreur(404);

        // On appelle le modèle
        $article = Article::retrieveByPK($_GET['id']);


        if (empty($article)) erreur(404);

        $article->delete();

        redirection('list-articles');
    } else erreur(404);
}
function commentaire()
{
    if (empty($_GET['id'])) die('Erreur 404');

    $commentaires = Commentaire::retrieveByid_article($_GET['id']);


    require_once path('view', 'commentaire');
}
function details()
{
    if (empty($_GET['id'])) die('Erreur 404');

    // On appelle le modèle
    $article = Article::retrieveByPK($_GET['id']);

    if (empty($article)) die('Erreur 404');
    // On appelle la vue
    require_once  path('view', 'details-article');
    commentaire();
}
function modification()
{
    if ($_SESSION['role'] === "admin") {


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
        include_once path('view', 'modif-article');
    } else erreur(404);
}
function liste()
{
    $articles = Article::all();


    require_once path('view', 'list-articles');
}
