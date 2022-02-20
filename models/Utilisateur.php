<?php

include_once __DIR__ . '/SimpleOrm.php';

class Utilisateur extends SimpleOrm
{
    public $id, $pseudo, $role, $identifiant, $mot_de_passe, $avatar;
}
