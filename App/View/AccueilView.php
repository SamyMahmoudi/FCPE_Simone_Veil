<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
</head>
<body>

    <?php include("inc/header.php") ?>

    <main>
        <section class="LandingPage-Accueil">
            <section class="containerRecentArticle">
                <article class="recentArticle">
                    <a href="?page=article&nb=<?=$recentArticleDatas[0]['article_id']?>" title="lire l'article">
                    <div class="containerImgRecent">
                        <img src="./images/imgArticles/<?=$recentArticleDatas[0]['article_img'] ?>" alt="image article">
                    </div>
                    <div>
                        <h2><?=$recentArticleDatas[0]['article_titre'] ?></h2>
                        <span></span>
                    </div>
                    <p><?=$recentArticleDatas[0]['article_desc'] ?></p>
                    <span class="dateCardArticle"><?=$recentArticleDatas[0]['article_date'] ?></span>
                    </a>                    
                </article>
            </section>
            <aside>
                <article>
                    <h2>L’association</h2>
                    <p>Contactez nous pour toutes questions d’ordre privées ou complexe. Nous vous contacterons dans un délai d'un jour ouvrable</p>
                    <a href="https://www.fcpe.asso.fr/" target="BLANK" title="en savoir plus">En savoir plus sur la fcpe</a>
                    <img src="./images/imgAccueil/logo-fcpe.png" alt="fcpe">
                </article>
            </aside>
        </section>
        <section class="containerArticles">
        <?php foreach ($Articles as $Article): 
            if ($Article->article_id != $recentArticleDatas[0]['article_id']) 
            {
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
            }   
        endforeach ?>
        </section>
        <section class="sectionFaq-Accueil">
            <h2>Dernières questions de la FAQ*</h2>
            <div class="faqEtoile"><p>(*foire aux questions)</p></div>
            <section class="containerCardFaq">
                <section class="behindQuestion">
                    <article>
                        <h3>Question ?</h3>
                        <p>Les 2 membres de l’association réponderont à vos messages dans un délai de maximum... jours.</p>
                    </article>
                    <article>
                        <h3>Question ?</h3>
                        <p>Les 2 membres de l’association réponderont à vos messages dans un délai de maximum... jours.</p>
                    </article>
                </section>
                <?php foreach ($questions as $question) : ?>
                <a class="cardQuestion" href="?page=faq" title="voir la réponse à la question">
                    <article >
                        <h3>Question ?</h3>
                        <p><?= $question->qr_question ?></p>
                    </article>
                </a>
                
                <?php endforeach ?>
                <div class="seeMoreAccueil">
                    <img src="./images/imgAccueil/arrow.png" alt="arrow">
                    <a href="?page=faq" title="voir la page FAQ"> Voir la page FAQ</a>
                </div>
            </section>
        </section>
        <section class="sectionParentsMembres-Accueil">
            <h2>LES PARENTS-MEMBRES</h2>
            <section>
                <article class="articleAvatarPM-Accueil">
                    <div>
                        <img src="./images/imgAccueil/Avatar1.png" alt="admin 1">
                        <span>FCPE, Admin 1</span>
                    </div>  
                    <div>
                        <img src="./images/imgAccueil/Avatar2.png" alt="admin 2">
                        <span>FCPE, Admin 2</span>
                    </div>
                </article>
                <article class="articleExpliPM-Accueil">
                    <p>Some quick example text to build on the card title aSome quick example text to build on the card title aSome quick example text.</p>
                    <p>Some quick example text to build on the card title aSome quick example text to build on the card title aSome quick example text to build on the card title and make.Some quick example text to build on the card title aSome quick example text.</p>
                    <a href="?page=contact" title="contacter les membres">Je contacte les membres</a>
                </article>
            </section>
        </section>
    </main>
    
    <?php include("inc/footer.php") ?>

</body>
</html>