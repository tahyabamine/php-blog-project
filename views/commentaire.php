<?php include __DIR__ . './parties/header.php' ?>


<h3>List des commentaire</h3>
<div class="list-group d-flex my-4">

    <?php foreach ($commentaires as $commentaire) { ?>


        <div class="card-body">

            <p class="card-text"><?= $commentaire->contenu ?></p>
            <p class="small mb-0 ms-2">Utilisateur <?= $commentaire->id_utilisateur ?></p>
            <div class="mb-1 text-muted"><?= $commentaire->date_publication ?></div>

        </div>

    <?php } ?>

</div>
<?php

include __DIR__ . '/partie/footer.php'; ?>