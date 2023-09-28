<?php
     require('actions/users/SecurityAction.php');
    require('actions/database.php');

    $GetInfosOfThisArticle = $bdd->prepare('SELECT * from article where id = ?');
    $GetInfosOfThisArticle->execute(array($_GET['id']));
    $usersInfos = $GetInfosOfThisArticle->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<?php require('actions/articles/getArticleById.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require('includes/head.php'); ?>
</head>
<body class="background-gradient">

<style>
    .contenue{
        height: 100vh;
        width: 100%;
    }
    .contenue > .list-group{
        width: 80%;
        margin-right: auto;
        margin-left: auto;
        margin-top: 2rem;
    }
</style>

<?php require('includes/navbar.php'); ?> 

<div class="contenue">
    <div class="list-group">
        <?php while ($article = $articleById->fetch()): ?>
            <div class="contenue">
                <h1><?= $article['titre']?></h1>
                <p><?= $article['contenue']?></p>
            </div>
            


        <?php endwhile; ?>
    </div>
</div>
</body>
</html>