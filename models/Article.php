<?php

include_once __DIR__ . '/SimpleOrm.php';

class Article extends SimpleOrm
{
    public $id, $titre, $auteur, $image, $contenu, $date_de_publication;
}
