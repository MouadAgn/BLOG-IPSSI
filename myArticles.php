<?php require('actions/articles/getArticlesUser.php'); ?>

<?php $user_articles = get_user_articles()->fetchAll(); ?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body>
    <?php include 'includes/navbar.php'; ?>
    <div class="container">
        <div class="row">
            <?php
            if (sizeof($user_articles) > 0) {
                foreach ($user_articles as $article) { ?>
                    <div class="card mt-3 ms-3 col-4" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $article["titre"] ?></h5>
                            <p class="card-text"><?php echo substr(strip_tags($article["contenue"]), 0, 100) ?></p>
                            <a href="lire_article.php?id=<?php echo $article["id"] ?>" class="card-link">Lire l'article</a>
                            <a href="modifier_article.php?id=<?php echo $article["id"] ?>" class="card-link">Modifier l'article</a>
                        </div>
                    </div>
                <?php }
            } else { ?>
                <p class="fs-1">Vous n'avez écrit aucun article</p>
                <a href="blog.php">Ecrire un article</a>
            <?php } ?>
        </div>
    </div>
</body>

</html>