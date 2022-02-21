<?php

include_once __DIR__ . '/SimpleOrm.php';

class Commentaire extends SimpleOrm
{
    public $id, $id_article, $id_utilisateur, $contenu, $date_publication;
}
