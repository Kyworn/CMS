<?php
class CommentDBLoad implements ICommentLoad{
    public $dbname= [],
        $pdo;

    public function __construct($host, $db, $user, $pass)
    {
        $this->pdo  =  new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8',$user , $pass);
    }
    function loadComment(String $path):array
    {
        $select = $this->pdo->query('SELECT * FROM commentaires');
        while($data = $select->fetch(PDO::FETCH_ASSOC)){
            array_push($this->dbname, $data);
        }
        $comments = array_map(function($comment) {
            return new Comment($comment{'idb'}, $comment{'auteur'}, $comment{'commentaire'}, $comment{'date_commentaire'});
        },$this->dbname);


        return $comments;
    }
}


