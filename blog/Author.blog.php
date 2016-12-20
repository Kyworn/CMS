<?
class Author
{
    public $id;
    public $pseudo;

    public function __construct(int $id, String $pseudo)
    {
        $this->id = $id;
        $this->pseudo = $pseudo;
    }
    function getShortName(): String
    {
        return ucfirst($this->pseudo) ;
    }
}
?>
