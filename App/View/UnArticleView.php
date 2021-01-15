<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="ckeditor/ckeditor.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
</head>
<body>

    <main class="main-dashboard">
        <?php include("inc/dashMenu.php") ?>
        <section class="page-dashboard">
        <?php 
            if($_GET['act'] == 'add') 
            {
                echo '
                <h1>Publier un article</h1>
                <form method="POST" class="dashArticleForm" enctype="multipart/form-data">
                    <section>
                        <input type="text" name="titreArticle" placeholder="titre de l\'article">
                        <input type="file" name="imgArticle" >
                        <textarea name="descArticle" cols="30" rows="10" placeholder=""></textarea>
                    </section>
                    <textarea id="contenuArticle"  name="contenuArticle"></textarea>
                    <input type="submit" name="valid-ajtArticle" value="UPLOAD L\'ARTICLE">
                </form>';
            } else if ($_GET['act'] == 'update') 
            {
                echo '
                    <h1>Modifier un article</h1>
                    <form method="POST" class="dashArticleForm" enctype="multipart/form-data">
                        <section>
                            <input type="text" name="titreArticle" id="" placeholder="question" value="'.$articlesDatas[0]["article_titre"].'">
                            <textarea name="descArticle" cols="30" rows="10" maxlength="50" placeholder="">'.$articlesDatas[0]["article_desc"].'</textarea>
                            <article class="imgArticleModifDashViews">
                                <img src="./images/imgArticles/'.$articlesDatas[0]["article_img"].'" alt="image article">
                                <input type="file" name="imgArticle" >
                            </article>
                        </section>
                        <textarea id="contenuArticle"  name="contenuArticle">'.$articlesDatas[0]["article_contenu"].'</textarea>
                        <input type="submit" name="valid-modifArticle" value="Modifier l\'article">
                    </form>
                    <article class="actionDashViews">            
                        <a class="backAction" href="?ad=gestionArticle" title="Retour">Retour</a>
                    </article>';
            } else if ($_GET['act'] == 'show') 
            {
                echo '
                    <h1>Article : '.$articlesDatas[0]["article_titre"].'</h1>
                    <p class="dashTime">Créée le : '.strftime("%d / %m / %G", strtotime($articlesDatas[0]["article_date"])).'</p>
                    <section class="template-ArticleDashViews">
                        <img src="./images/imgArticles/'.$articlesDatas[0]["article_img"].'" alt="image article">
                        <article class="contenuArticle">'.$articlesDatas[0]["article_contenu"].'</article>
                    </section>
                    <article class="actionDashViews">            
                        <a class="deleteAction" href="?ad=gestionArticle&delete='.$articlesDatas[0]["article_id"].'" title="Supprimer">Supprimer</a>
                        <a class="updateAction" href="?ad=actionArticle&act=update&nb='.$articlesDatas[0]["article_id"].'" title="Modifier">Modifier</a>
                        <a class="backAction" href="?ad=gestionArticle" title="Retour">Retour</a>
                    </article>
                    ';
            } else 
            {
                header('Location:?ad=gestionFaq');
            }
        ?>
        </section>
    </main>
    <script>
        CKEDITOR.replace( 'contenuArticle' );
    </script>
</body>
</html>