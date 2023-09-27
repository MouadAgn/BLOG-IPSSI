<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Saisie d'article</h1>
                <hr>
                <form action="" method="post">
                    <div class="form-group row">
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
                        <div class="d-grid gap-2 col-md-8 mt-2">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>