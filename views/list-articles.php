<?php include __DIR__ . './parties/header.php' ?>


<h1>List des articles</h1>
<div class="list-group my-4">

    <?php foreach ($articles as $article) { ?>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= $article->image ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $article->titre ?></h5>
                        <p class="card-text"><?= resume($article, 150) ?></p>
                        <a class="text-align-right" href="index.php?route=details-article&id=<?= $article->id ?>">Voir plus ...</a>
                        <p class="card-text"><small class="text-muted"><?= $article->date_de_publication ?></small></p>

                        <p class="card-text"><a href=""></a><small class="text-muted"><?= $article->auteur ?></small></p>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

</div>
<?php include __DIR__ . '/partie/footer.php'; ?>