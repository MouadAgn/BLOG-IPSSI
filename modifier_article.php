<?php
session_start();
require('actions/articles/update_article.php');
require('actions/articles/get_the_article.php');
require('actions/articles/deleteArticleById.php');

$article = get_article_by_id($_GET["id"]);
?>
<!DOCTYPE html>
<html lang="en">
<?php if ($article === false || $article["id_user"] !== $_SESSION["id"]) {
    header("location:liste_blog.php");
    echo $article;
} else {
    include 'includes/head.php';
?>
    <body class="background-gradient">
        <?php include 'includes/navbar.php'; ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Rédiger un article</h1>
                    <hr>
                    <?php if (isset($error_msg)) {
                        echo '<p style=color:red;>' . $error_msg . '</p>';
                    }  ?>
                    <form action="" method="post">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Titre" name="title" value="<?php echo ($article["titre"]) ?>">
                            </div>
                        </div>
                        <div class="form-group row mt-2">
                            <div class="col-md-12">
                                <textarea class="form-control" id="editor" name="content"><?php echo ($article["contenue"]) ?></textarea>
                                <script src="./ckeditor/ckeditor.js"></script>
                                <script>
                                    ClassicEditor
                                        .create(document.getElementById('editor'))
                                        .catch(error => {
                                            console.error(error)
                                        });
                                </script>
                            </div>
                        </div>
                        <input name="id_article" hidden value=<?php echo ($article["id"]) ?>></input>
                        <div class="form-group row">
                            <div class="d-grid gap-2 col-md-12 mt-2">
                                <button class="btn btn-primary" type="submit" name="update_article">Submit</button>
                                <button class="btn btn-danger" type="submit" name="delete_article">Delete</button>
                            </div>
                        </div>
                    </form>
                <?php } ?>
                </div>
            </div>
        </div>
    </body>

</html>