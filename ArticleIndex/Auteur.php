<?
class Auteur
{
    public $id;
    public $pseudo;

    public function __construct(int $id, String $pseudo)
    {
        $this->id = $id;
        $this->pseudo = $pseudo;
    }
    function getFirstCharToller(): String
    {
        return ucfirst($this->pseudo) ;
    }
}
