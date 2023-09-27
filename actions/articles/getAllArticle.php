<?php
    require('actions/database.php');

    $allArticle = $bdd->prepare('
        SELECT article.*, user.nom FROM article JOIN user ON article.id_user = user.id
    ');

    $allArticle->execute();
?>