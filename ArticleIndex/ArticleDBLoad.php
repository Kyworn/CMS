<?php

class ArticleDBLoad implements IArticleLoad {
    public $dbname= [],
    $pdo;

    public function __construct($host, $db, $user, $pass)
    {
        $this->pdo  =  new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8',$user , $pass);
    }
    function loadArticle(String $path):array
    {
        $select = $this->pdo->query('SELECT * FROM posts');
        while($data = $select->fetch(PDO::FETCH_ASSOC)){
             array_push($this->dbname, $data);
        }
        $auteurs = array_map(function($auteur){
            return new Auteur($auteur{'id'}, $auteur{'pseudo'});
        },$this->dbname);
        $articles = array_map(function($article)use($auteurs){
            $idAuteurs = $article{'id'};

            $auteurDarticle = array_filter(
                    $auteurs, function($auteur)use($idAuteurs) {
                return $auteur->id == $idAuteurs;
            });
            $auteurDarticle = current($auteurDarticle);
                    return new Article(
                            $article{'id'}, $article{'title'},$article{'content'},
                        $auteurDarticle, new DateTime($article['timedate'])
            );
        },$this->dbname);
        return $articles;
    }
}
