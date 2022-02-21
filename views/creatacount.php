<?php include __DIR__ . '/parties/header.php'; ?>

<h1>cree un compte</h1>

<form method="post">
    <div class="form-group row">
        <label for="identifiant" class="col-sm-12 col-form-label">Identifiant</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="identifiant" id="identifiant" placeholder="Identifiant" autofocus required>
        </div>
    </div>

    <div class="form-group row">
        <label for="pseudo" class="col-sm-12 col-form-label">Pseudo</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Pseudo" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="image" class="col-sm-12 col-form-label">Image</label>
        <div class="col-sm-12">
            <input type="url" class="form-control" name="image" id="image" placeholder="Image">
        </div>
    </div>


    <div class="form-group row">
        <label for="password" class="col-sm-12 col-form-label">Mot de passe</label>
        <div class="col-sm-12">
            <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="confirmpassword" class="col-sm-12 col-form-label"> Confirmer votre mot de passe</label>
        <div class="col-sm-12">
            <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Confirmer votre mot de passe" required>
        </div>
    </div>

    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </div>
</form>


<?php include __DIR__ . '/parties/footer.php';
