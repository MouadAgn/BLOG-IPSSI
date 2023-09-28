<?php
    require ('actions/database.php');
    session_start();
    // Validate the FORM
    if(isset($_POST['save_article']))
    {
        //Check if the user filled the form.
        if(!empty($_POST['content']) && !empty($_POST['title']))
        {
            //User's DATAS.
            $content = $_POST['content'];
            $title = htmlspecialchars($_POST['title']);

                //Insert the user on the database
                $savedArticle = $bdd ->prepare('INSERT INTO article(titre, contenue, id_user) VALUES(?, ?, ?)');
                $savedArticle->execute(array($title, $content, $_SESSION['id']));

                $id_new_article = $bdd->lastInsertId();

                header("Location:modifier_article.php?id=" . $id_new_article);
            }
        else
        {
            $error_msg = "Veuillez completer tous les champs...";
        }
    }

?>