<?php include __DIR__ . './parties/header.php' ?>




<div class="card w-100">
    <img src="<?= $article->image ?>" style="height: 500px;" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?= $article->titre ?></h5>
        <p class="card-text"><?= $article->contenu ?></p>

        <p class="card-text"><small class="text-muted"><?= $article->date_de_publication ?></small></p>

        <p class="card-text"><a href=""></a><small class="text-muted"><?= $article->auteur ?></small></p>
    </div>
</div>

<?php include __DIR__ . '/commentaire.php';
if (!empty($_SESSION)) { ?>
    <form method="post" action=" <?= url('commentaire' . '&id=' . $_GET['id']) ?>">
        <div class="form-group row">
            <label for="comment" class="col-sm-12 col-form-label">Ajouter un commentaire</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" name="comment" id="comment" placeholder="Ajouter un commentaire">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
        </div>
    </form>


<?php
}
include __DIR__ . '/partie/footer.php'; ?>