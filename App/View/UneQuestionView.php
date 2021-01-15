<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact demande</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="ckeditor/ckeditor.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <main class="main-dashboard">
        <?php include("inc/dashMenu.php") ?>
        <section class="page-dashboard">
           <?php
                if($_GET['act'] == 'add') 
                {
                    echo '
                        <h1>Ajouter une question</h1>
                        <form method="POST" class="dashQuestionForm">
                            <section>
                                <input type="text" name="titreQuestion" id="" placeholder="question">
                            </section>
                            <textarea id="contenuArticle"  name="contenuQuestion"></textarea>
                            <input type="submit" name="valid_qr" value="VALIDER LA QUESTION">
                        </form>';
                } else if ($_GET['act'] == 'update') 
                {
                    echo '
                        <h1>Modifier une question</h1>
                        <form method="POST" class="dashQuestionForm">
                            <section>
                                <input type="text" name="titreQuestion" id="" placeholder="question" value="'.$qrDatas[0]["qr_question"].'">
                            </section>
                            <textarea id="contenuArticle"  name="contenuQuestion">'.$qrDatas[0]["qr_reponse"].'</textarea>
                            <input type="submit" name="update_qr" value="VALIDER LA MODIFICATION">
                        </form>
                        <article class="actionDashViews">            
                            <a class="deleteAction" href="?ad=gestionFaq&delete='.$qrDatas[0]["qr_id"].'" title="Supprimer">Supprimer</a>
                            <a class="backAction" href="?ad=gestionFaq" title="Retour">Retour</a>
                        </article>';
                } else if ($_GET['act'] == 'show') 
                {
                    echo '
                        <h1>Question : '.$qrDatas[0]["qr_question"].'</h1>
                        
                        <p class="dashTime">Date de mise en ligne : '.$qrDatas[0]["qr_date"].'</p>
                        <h2 class="dashTitleSecond">Réponse :</h2>
                        <article class="contenuReponse">'.$qrDatas[0]["qr_reponse"].'</article>
                        <article class="actionDashViews">            
                            <a class="deleteAction" href="?ad=gestionFaq&delete='.$qrDatas[0]["qr_id"].'" title="Supprimer">Supprimer</a>
                            <a class="updateAction" href="?ad=actionFaq&act=update&nb='.$qrDatas[0]["qr_id"].'" title="Modifier">Modifier</a>
                            <a class="backAction" href="?ad=gestionFaq" title="Retour">Retour</a>
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
        CKEDITOR.replace( 'contenuQuestion' );
    </script>
</body>
</html>