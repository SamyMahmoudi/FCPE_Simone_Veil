<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Article</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
</head>
<body>

    <main class="main-dashboard">
        <?php include("inc/dashMenu.php") ?>
        <section class="page-dashboard">

            <h1>Articles</h1>
            <table class="table-dash">
                <thead>
                    <th>Titre de l'article</th>
                    <th>Date de création</th>
                    <th colspan="3">Action sur l'article</th>
                </thead>
                <tbody>
                    <?php foreach($ArticlesDatas as $ArticleData) :?>
                    <tr>
                        <td><?= $ArticleData->article_titre?></td>
                        <td><?=strftime("%d / %m / %G", strtotime($ArticleData->article_date))?></td>
                        <td><a class="table-link green-link" title="Voir l'article" href="?ad=actionArticle&act=show&nb=<?= $ArticleData->article_id ?>">Voir l'article</a></td>
                        <td><a class="table-link blue-link" title="Voir l'article" href="?ad=actionArticle&act=update&nb=<?= $ArticleData->article_id ?>">Modifier l'article</a></td>
                        <td><a class="table-link red-link" title="Supprimer l'article" href="?ad=gestionArticle&delete=<?= $ArticleData->article_id ?>"><img src="./images/imgAdmin/picto/trash-2.png" alt="trash"></a></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <article class="actionDashViews">
                <a class="backAction" href="?ad=actionArticle&act=add" title="ajouter un article">Ajouter un article</a>
            </article>
        </section>
    </main>
</body>
</html>