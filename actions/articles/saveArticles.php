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
                $InsertUserOnWebsite = $bdd ->prepare('INSERT INTO article(titre, contenue, id_user) VALUES(?, ?, ?)');
                $InsertUserOnWebsite->execute(array($title, $content, $_SESSION['id']));

                header("Location: blog.php");

            }
        else
        {
            $error_msg = "Veuillez completer tous les champs...";
        }
    }

?>