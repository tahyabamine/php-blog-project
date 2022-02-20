<?php include __DIR__ . './parties/header.php' ?>

<h1 class="mt-5">Se connecter</h1>

<form method="post">


    <div class="form-group row">
        <label for="login" class="col-sm-12 col-form-label">Identifiant</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="login" id="login" placeholder="Identifiant">
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-sm-12 col-form-label">Mot de passe</label>
        <div class="col-sm-12">
            <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
        </div>
    </div>

    <div class="form-group row mt-5">
        <div class="">
            <button type="submit" class="btn btn-primary">Connexion</button>
        </div>
    </div>
</form>

<?php include __DIR__ . '/partie/footer.php'; ?>