<?php require('actions/articles/get_the_article.php'); ?>
<?php $article = get_article_by_id($_GET["id"]); ?>

<!DOCTYPE html>

<html lang="en">
<?php include 'includes/head.php'; ?>

<body>
    <?php include 'includes/navbar.php'; ?>
    <div class="container">
        <div class="row">
            <h1><?php echo($article != false ? $article["titre"] : "Article non trouvé"); ?></h1>
            <?php echo($article != false ? $article["contenue"] : ""); ?>
        </div>
    </div>
</body>

</html>