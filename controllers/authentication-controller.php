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
    redirection('accueil');
}
