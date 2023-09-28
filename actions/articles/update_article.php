<?php
    require ('actions/database.php');

    // Validate the FORM
    if(isset($_POST['update_article']))
    {
        //Check if the user filled the form.
        if(!empty($_POST['content']) && !empty($_POST['title']) && !empty($_POST['id_article']))
        {
            //User's DATAS.
            $content = $_POST['content'];
            $title = htmlspecialchars($_POST['title']);
            $id_article = $_POST['id_article'];

                //Insert the user on the database
                $InsertUserOnWebsite = $bdd ->prepare('UPDATE article SET titre = ?, contenue = ? WHERE id = ?');
                $InsertUserOnWebsite->execute(array($title, $content, $id_article));

                header("Location:modifier_article.php?id=" . $id_article);

            }
        else
        {
            $error_msg = "Veuillez completer tous les champs...";
        }
    }

?>