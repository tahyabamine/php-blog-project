<?php
require_once path('model', 'Utilisateur');

function connexion()
{
    if (!empty($_POST)) {
        // Le formulaire a été soumis

        if (
            !empty($_POST['login'])
            && !empty($_POST['password'])
        ) {
            /**
             * On va chercher l'utilisateur dans la BDD
             */

            $utilisateur = Utilisateur::retrieveByIdentifiant($_POST['login'], SimpleOrm::FETCH_ONE);

            if (!empty($utilisateur)) {

                if (password_verify($_POST['password'], $utilisateur->mot_de_passe)) {

                    $_SESSION['pseudo'] = $utilisateur->pseudo;
                    $_SESSION['identifiant'] = $utilisateur->identifiant;
                    $_SESSION['avatar'] = $utilisateur->avatar;
                    $_SESSION['role'] = $utilisateur->role;
                    $_SESSION['id'] = $utilisateur->id;

                    if (!empty($_POST['remember']))
                        setcookie('remember', $utilisateur->id, time() + 2592000);


                    redirection('accueil');
                } else $error = 'Mauvais mot de passe';
            } else $error = 'Mauvais identifiant';
        } else $error = 'Formulaire mal rempli';
    }

    // Afficher le formulaire de connexion
    require_once path('view', 'connexion');
}
function deconnexion()
{
    session_destroy();
    setcookie('remember', '', 0);
    redirection('accueil');
}
function creatAcount()
{
    if (!empty($_POST)) {

        if (
            !empty($_POST['pseudo'])
            && !empty($_POST['identifiant'])
            && !empty($_POST['password'])

            && !empty($_POST['confirmpassword'])
            && filter_var($_POST['image'], FILTER_SANITIZE_URL) !== false
            && ($_POST['password'] === $_POST['confirmpassword'])
        ) {


            $utilisateur = new Utilisateur();

            $utilisateur->pseudo = $_POST['pseudo'];
            $utilisateur->avatar = $_POST['image'];
            $utilisateur->identifiant = $_POST['identifiant'];
            $utilisateur->mot_de_passe = password_hash($_POST['password'], PASSWORD_BCRYPT);


            $utilisateur->save(); // Je sauvegarde (ça envoie à la BDD)
            $_SESSION['pseudo'] = $utilisateur->pseudo;
            $_SESSION['identifiant'] = $utilisateur->identifiant;
            $_SESSION['avatar'] = $utilisateur->avatar;
            $_SESSION['role'] = $utilisateur->role;
            $_SESSION['id'] = $utilisateur->id;
            redirection('accueil');
        } else {;
            redirection('creatacount');
        }
    }

    require_once path('view', 'creatacount');
}
