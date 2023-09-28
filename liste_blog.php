<?php require('actions/users/SecurityAction.php'); ?>
<?php require('actions/articles/getAllArticle.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('includes/head.php'); ?>
    <title>Liste des blogs</title>
</head>

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

<body class="bg-secondary">
    <?php require('includes/navbar.php'); ?> 

    <div class="contenue">
        <div class="list-group">
            <?php while ($article = $allArticle->fetch()): ?>
                <a href="./larticle.php?id=<?= $article['id']?>" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1"><?= $article['titre'] ?></h5>
                        <small class="text-body-secondary">date</small>
                    </div>
                    <p class="mb-1">description</p>
                    <small class="text-body-secondary"><?= $article['pseudo'] ?></small>
                </a>
            <?php endwhile; ?>
        </div>
    </div>

    
</body>
</html>