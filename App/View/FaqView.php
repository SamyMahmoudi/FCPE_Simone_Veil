<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
</head>
<body>

    <?php include("inc/header.php") ?>

    <main class="mainFaq">
        <section>
            <h1>FOIRE AUX QUESTIONS</h1>
            <?php 
                foreach ($contenus as $contenu) 
                    echo 
                        '<article class="question">
                            <div class="titreQuestion">
                                <h2>'.$contenu->qr_question.'</h2>
                            </div>
                            <div class="reponseQuestion">
                                '.$contenu->qr_reponse.'
                            </div>
                        </article>'
            ?> 
            <p class="faqRedirectionContact">Ces questions ne sont pas celles que vous vous posés ? C'est pas grave, contactez-nous directement depuis la page <a href="?page=contact" title="page contact">CONTACT</a>  !</p>
        </section>
    </main>
    
    <?php include("inc/footer.php") ?>

    <script src="js/FaqScript.js"></script>
</body>
</html>