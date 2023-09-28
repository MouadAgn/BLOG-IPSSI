<?php
    require('actions/database.php');

    $allArticle = $bdd->prepare('
        SELECT article.*, user.pseudo FROM article JOIN user ON article.id_user = user.id ORDER BY id DESC;
    ');

    $allArticle->execute();
?>