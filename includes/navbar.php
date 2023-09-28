<?php require('actions/database.php'); ?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">MyBlog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="liste_blog.php">Articles</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="myArticles.php">Mes articles</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="ecrire_article.php">Ecrire un article</a>
        </li>
    </ul>
    <!-- Ajout de 'mr-4' pour espacer -->
    <span class="navbar-text mr-4">
        Hello, <?php echo $_SESSION['pseudo']; ?> &nbsp; &nbsp;
    </span>
    <!-- Ajout de 'mr-4' pour espacer -->
    <form action="VOTRE_URL_DE_TRAITEMENT_DE_RECHERCHE" method="GET" class="form-inline d-flex mr-4">
        <input class="form-control me-2" type="search" name="query" placeholder="Rechercher" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
    </form>
    &nbsp; &nbsp;<a class="btn btn-danger" href="actions/logoutAction.php">LogOut</a>
</div>

    </div>
</nav>
