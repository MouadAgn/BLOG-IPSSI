<?php
    require('actions/database.php');

    
    $articleById = $bdd->prepare('
    SELECT * FROM article WHERE id = ?;
    ');

    $articleById->execute(array($_GET['id']));

?>