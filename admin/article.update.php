<?php

include('../connectsql/pdoconnect.php');


        $content = $_POST['content'];
        $title = $_POST['title'];
        $id = $_POST['id'];
        $contentupdate = "UPDATE posts SET content=? WHERE id=?";
        $titleupdate = "UPDATE posts SET title=? WHERE id=?";
        $q = $pdo->prepare($contentupdate);
        $a = $pdo->prepare($titleupdate);
        $a->execute(array($title,$id));
        $q->execute(array($content,$id));
        echo "<script language='javascript' type='text/javascript'>window.open('article.change.php','_self')</script>";

