<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact demande</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
</head>

<body>
    <main class="main-dashboard">
        <?php include("inc/dashMenu.php") ?>
        <section class="page-dashboard">
            <?php foreach($demandes as $demande) ?>
            <h1>Demande n°<?= $demande->contact_id ?></h1>
            <article class="coordonneesDemande">
                <h2 class="coordonneesDate">Date : <?= $demande->contact_date ?></h2>
                <h2>Coordonnées</h2>
                <ul>
                    <li>Nom : <?= $demande->contact_nom ?></li>
                    <li>Prenom : <?= $demande->contact_prenom ?></li>
                    <li>Tel : +33<?= $demande->contact_tel ?></li>
                    <li>Mail : <?= $demande->contact_mail ?></li>
                    <li>Classe : <?= $demande->contact_classe ?></li>
                </ul>
            </article>
            <article class="contenuDemande">      
                <h2>Message</h2>
                <p>
                    <?= $demande->contact_message ?>
                </p>
            </article>
            <article class="actionDashViews">            
                <a class="deleteAction" href="?ad=gestionContact&delete=<?= $demande->contact_id ?>" title="Supprimer">Supprimer</a>
                <a class="backAction" href="?ad=gestionContact" title="Retour">Retour</a>
            </article>
        </section>
    </main>
</body>
</html>