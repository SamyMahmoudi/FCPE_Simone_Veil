<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <?php include("inc/header.php") ?>

    <main class="mainTemplateArticle">
        <h1 class="headlinerArticle">Découvrez nos articles !</h1> 
        <section class="sectionTemplateArticle">
            <aside>
                <?php foreach($allArticles as $allArticle): ?>
                <a href="?page=article&nb=<?= $allArticle->article_id ?>" title="#"><?= $allArticle->article_titre ?></a>
                <hr>
                <?php endforeach ?>
            </aside>
            <article>
                <?php foreach($articles as $article) :?>
                <div>
                    <img src="./images/imgArticles/<?= $article->article_img?>" alt="<?= $article->article_img?>">
                </div>
                <h2><?= $article->article_titre ?></h2>
                <section>
                    <?= $article->article_contenu ?>
                </section>
                <?php endforeach ?>
                <a href="?page=tousLesArticles" class="linkReturn" title="retour page accueil">Retour</a>
            </article>
        </section>
    </main>
    
    <?php include("inc/footer.php") ?>

</body>
</html>