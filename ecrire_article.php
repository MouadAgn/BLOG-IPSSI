<?php 
session_start();
 require ('actions/articles/saveArticles.php');
 ?>
<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php'; ?>

<body class="background-gradient">
<?php include 'includes/navbar.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <h1>Rédiger un article</h1>
                <hr>
                <?php if(isset($error_msg))  {  echo '<p style=color:red;>'.$error_msg.'</p>';   }  ?>
                <form action="" method="post">
                <div class="form-group row">
                        <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Titre" name="title">
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <div class="col-md-12">
                            <textarea class="form-control" id="editor" name="content"></textarea>
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
                    <div class="form-group row">
                        <div class="d-grid gap-2 col-md-12 mt-2">
                            <button class="btn btn-primary" type="submit" name="save_article">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>