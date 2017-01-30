


<?php
class CommentRenderer
{
    function render($article): String
    {
        if(is_array($article)){
            $articleLinks = array_map(function($article){
                return "<h3><a href=\"".$_SERVER['PHP_SELF']."?commentId=".$comment->idb."\">$comment->title</a></h3>
              $comment->commentaire";
            }, $comment);

            return join("<hr/>", $commentLink);
        } else {
        }
    }
}


