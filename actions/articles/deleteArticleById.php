<?php
    require('actions/database.php');
    
    if(isset($_POST['delete_article'])){ 

        $articleById = $bdd->prepare('DELETE FROM `article` WHERE  id = ?;');
        
        $articleById->execute(array($_GET['id']));
        
        header('Location: myArticles.php');
    }

?>