<?php
class ArticleRenderer
{
    function render($article): String
    {
        if(is_array($article)){
            $articleLinks = array_map(function($article){
                return "<h3><a href=\"".$_SERVER['PHP_SELF']."?articleId=".$article->id."\">$article->title</a></h3>
              $article->content";
            }, $article);

            return join("<hr/>", $articleLinks);
        } else {
            return "<h3>".$article->title."</h3><p>"
                ." le ".$article->publicationDate->format('d-m-Y')."<br><br>"
                .$article->content."</p><p>"
                .$article->auteur->getFirstCharToller()
                ." </p>";
        }
    }
}
