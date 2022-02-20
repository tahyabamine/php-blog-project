<!doctype html>
<html lang="en">

<head>
    <title>Blog php</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <nav class="nav d-flex justify-content-between m-3">
        <div class="d-flex">


            <a class="nav-link" href="<?= url('accueil') ?>">Accueil</a>
            <a class="nav-link" href="<?= url('list-articles') ?>">List des Articles</a>
            <?php if ($_SESSION['role'] === "admin") { ?>
                <a class="nav-link" href="<?= url('ajout-article') ?>">Ajouter un article</a>
            <?php } ?>
            <?php if (empty($_SESSION['pseudo'])) { ?>

                <a class="nav-link" href="<?= url('connexion') ?>">Connexion</a>

        </div>
    <?php } else { ?>
        <a class="nav-link" href="<?= url('deconnexion') ?>">Déconnexion</a>
        </div>
        <div>

            <img class="nav-item " style="width:50px  " src="<?= $_SESSION['avatar'];  ?>">
        </div>

    <?php } ?>
    </nav>
    <div class="container mb-5">