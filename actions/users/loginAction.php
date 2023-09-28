<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Forum</title>
</head>
<body>
    
</body>
</html>
<?php 
    session_start();
    require('actions/database.php');

    if(isset($_POST['login']))
    {
        //Check if the user filled the form.
        if(!empty($_POST['pseudo'])  AND !empty($_POST['pwd']))
        {
            //User's DATAS.
            $user_pseudo = htmlspecialchars($_POST['pseudo']);
            $user_password = htmlspecialchars($_POST['pwd']);

            $checkIfUserExists = $bdd->prepare('SELECT * FROM user where pseudo = ?');
            $checkIfUserExists->execute(array($user_pseudo));

            $usersInfos = $checkIfUserExists->fetch();

            if(($checkIfUserExists->rowCount() > 0) AND ($user_pseudo == $usersInfos['pseudo']))
            { 
                if(password_verify($user_password, $usersInfos['mdp']))
                {
                    $_SESSION['auth'] = true;
                    $_SESSION['id'] = $usersInfos['id'];
                    $_SESSION['nom'] = $usersInfos['nom'];
                    $_SESSION['prenom'] = $usersInfos['prenom'];
                    $_SESSION['pseudo'] = $usersInfos['pseudo'];

                    ?> 
                    <script>
                        swal({
                            title: "",
                            text: "Welcome <?php echo $_SESSION['pseudo']; ?>",
                            icon: "success",
                        }).then(function() {
                            window.location = "liste_blog.php";
                        });
                    </script>
                    
                    <?php
                }
                else
                {
                    $error_msg = "Votre mot de passe est incorrect....";
                }
            }
            else
            {
                $error_msg = "Votre pseudo est incorrect....";
            }

        }

        else
        {
            $error_msg = "Veuillez compléter tous les champs..";
        }
    }


?>