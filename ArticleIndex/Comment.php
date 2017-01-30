<?php
class Comment
{
    public $idb;
    public $commentaire;
    public $auteur;
    public $date_commentaire;

    public function __construct(int $idb, String $commentaire, String $auteur, String $date_commentaire)
    {
        $this->idb = $idb;
        $this->commentaire = $commentaire;
        $this->date_commentaire = $date_commentaire;
        $this->auteur = $auteur;
    }
}

