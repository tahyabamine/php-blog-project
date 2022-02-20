<?php include __DIR__ . '/parties/header.php'; ?>

<h1>Ajouter un article</h1>

<form method="post">
    <div class="form-group row">
        <label for="titre" class="col-sm-12 col-form-label">Titre</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="titre" id="titre" placeholder="titre" autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="image" class="col-sm-12 col-form-label">Image</label>
        <div class="col-sm-12">
            <input type="url" class="form-control" name="image" id="image" placeholder="Image">
        </div>
    </div>

    <div class="form-group row">
        <label for="auteur" class="col-sm-12 col-form-label">Auteur</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="auteur" id="auteur" placeholder="auteur">
        </div>
    </div>

    <div class="form-group row">
        <label for="contenu" class="col-sm-12 col-form-label">Contenu</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="contenu" id="contenu" placeholder="contenu">
        </div>
    </div>
    <div class="form-group row">
        <label for="date" class="col-sm-12 col-form-label">Date de publication</label>
        <div class="col-sm-12">
            <input type="datetime-local" class="form-control" name="date" id="date" placeholder="date de publication">
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </div>
</form>


<?php include __DIR__ . '/parties/footer.php';
