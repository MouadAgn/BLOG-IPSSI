<?php require('actions/articles/get_the_article.php'); ?>
<?php require('actions/users/SecurityAction.php'); ?>
<?php $article = get_article_by_id($_GET["id"]); ?>

<!DOCTYPE html>

<html lang="en">
<?php include 'includes/head.php'; ?>

<body class="bg-secondary">
    <?php include 'includes/navbar.php'; ?>
    <div class="container">
        <div class="row">
            <div class="card mt-3 col-4" style="width: 80vw; heigth: auto;">
                <div class="card-body">
                    <h1><?php echo($article != false ? $article["titre"] : "Article non trouvé"); ?></h1>
                    <?php echo($article != false ? $article["contenue"] : ""); ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>