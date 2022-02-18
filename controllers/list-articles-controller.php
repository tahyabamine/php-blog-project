  <?php
    require_once './models/Article.php';
    $articles = Article::all();


    require_once './views/list-articles.php';
