<?php require('actions/articles/getArticlesUser.php'); ?>

<?php $user_articles = get_user_articles() ?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body>
    <?php include 'includes/navbar.php'; ?>
    <?php foreach ($user_articles as $article) { ?>
        <div class="card mt-3 ms-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $article["titre"] ?></h5>
                <p class="card-text"><?php echo substr(strip_tags($article["contenue"]), 0, 100) ?></p>
                <a href="#" class="card-link">Lire l'article</a>
                <a href="#" class="card-link">Modifier l'article</a>
            </div>
        </div>
    <?php } ?>
</body>

</html>