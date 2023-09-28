<?php
        function get_article_by_id($article_id){
            require ('actions/database.php');
            
            
            $article = $bdd->prepare("SELECT titre, contenue, id_user from article WHERE id = ?");
            $article->execute(array($article_id));
            return $article->fetch();
            
    }
?>