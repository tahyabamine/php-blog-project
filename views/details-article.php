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

<?php include __DIR__ . '/partie/footer.php'; ?>