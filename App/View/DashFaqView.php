<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Question</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
</head>
<body>
    <main class="main-dashboard">
        <?php include("inc/dashMenu.php") ?>
        <section class="page-dashboard">

            <h1>Questions existantes</h1>
            <table class="table-dash">
                <thead>
                    <th>Question</th>
                    <th>Date</th>
                    <th colspan="3">Action sur la question</th>
                </thead>
                <tbody>
                    <?php foreach($qrDatas as $qrData) :?>
                    <tr>
                        <td><?= $qrData->qr_question?></td>
                        <td><?= strftime("%d / %m / %G", strtotime($qrData->qr_date))?></td>
                        <td><a class="table-link green-link" title="Voir la question-reponse" href="?ad=actionFaq&act=show&nb=<?= $qrData->qr_id ?>">Voir la question</a></td>
                        <td><a class="table-link blue-link" title="Voir la question-reponse" href="?ad=actionFaq&act=update&nb=<?= $qrData->qr_id ?>">Modifier la question</a></td>
                        <td><a class="table-link red-link" title="Supprimer la question-reponse" href="?ad=gestionFaq&delete=<?=$qrData->qr_id ?>"><img src="./images/imgAdmin/picto/trash-2.png" alt="trash"></a></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <article class="actionDashViews">
                <a class="backAction" href="?ad=actionFaq&act=add" title="ajouter une question">Ajouter une question</a>
            </article>
            
        </section>  
    </main>
</body>
</html>