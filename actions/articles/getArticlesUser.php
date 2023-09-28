<?php
        function get_user_articles(){
            
            require ('actions/database.php');

            $user_id = $_SESSION['id'];
            $articles_user = $bdd->prepare("SELECT titre, contenue, id from article WHERE id_user = ? ORDER BY id DESC");
            $articles_user->execute(array($user_id));
            return $articles_user;
            
    }
?>