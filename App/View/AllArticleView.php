<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tous les articles</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <?php include("inc/header.php") ?>
    <main>
        <h1 class="titreTsArticle">TOUS LES ARTICLES</h1>
        <section class="containerArticles">
        <?php foreach ($Articles as $Article): 
                echo '<a class="cardArticle" href="?page=article&nb='.$Article->article_id.'" title="lire l\'article" >
                <article >
                    <div>
                        <img src="./images/imgArticles/'.$Article->article_img.'" alt="image article">
                    </div>
                    <h2>'.$Article->article_titre.'</h2>
                    <p>'.$Article->article_desc.'</p>
                    <span class="dateCardArticle">'.$Article->article_date.'</span>
                </article>
                </a>';
        endforeach ?>
        </section>
    </main>
    <?php include("inc/footer.php") ?>

</body>
</html>