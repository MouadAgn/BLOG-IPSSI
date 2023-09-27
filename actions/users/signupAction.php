<?php 
    session_start();
    require ('actions/database.php');

    // Validate the FORM
    if(isset($_POST['validate']))
    {
        //Check if the user filled the form.
        if(!empty($_POST['pseudo']) AND !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST['mdp']))
        {
            //User's DATAS.
            $user_pseudo = htmlspecialchars($_POST['pseudo']);
            $user_nom = htmlspecialchars($_POST['nom']);
            $user_prenom = htmlspecialchars($_POST['prenom']);
            $user_email = htmlspecialchars($_POST['email']);
            $user_password = password_hash($_POST['mdp'] , PASSWORD_DEFAULT);

            //Check if the user already exists on the websit
            $checkIfUserAlreadyExists = $bdd->prepare('SELECT pseudo from user where pseudo = ?');
            $checkIfUserAlreadyExists->execute(array($user_pseudo));
            

            if($checkIfUserAlreadyExists->rowCount() == 0)
            {
                //Insert the user on the database
                $InsertUserOnWebsite = $bdd ->prepare('INSERT INTO user(pseudo, nom, prenom, email, mdp) VALUES(?, ?, ?, ?, ?)');
                $InsertUserOnWebsite->execute(array($user_pseudo, $user_nom, $user_prenom, $user_email, $user_password));

                //Get user's informations.
                $GetInfosOfThisUser = $bdd ->prepare('SELECT id, pseudo, nom, prenom, email, mdp FROM user WHERE nom = ? AND prenom = ? AND pseudo = ?');
                $GetInfosOfThisUser->execute(array($user_nom, $user_prenom, $user_pseudo));

                $usersInfos = $GetInfosOfThisUser->fetch();

                $_SESSION['auth'] = true;
                $_SESSION['id'] = $usersInfos['id'];
                $_SESSION['nom'] = $usersInfos['nom'];
                $_SESSION['prenom'] = $usersInfos['prenom'];
                $_SESSION['pseudo'] = $usersInfos['pseudo'];

                header("Location: ./liste_blog.php");

            }
            else
            {
                $error_msg = "L'utilisateur existe déja sur le site";
            }


        }
        else
        {
            $error_msg = "Veuillez completer tous les champs...";
        }
    }

?>