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
            <h1>Demandes de contact</h1>
            <table class="table-dash">
                <thead>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Classe</th>
                    <th>Mail</th>
                    <th>Telephone</th>
                    <th colspan="2">Action sur la demande</th>
                </thead>
                <tbody>
                    <?php foreach($demandesCtct as $demandeCtct) :?>
                    <tr>
                        <td><?= $demandeCtct->contact_nom ?></td>
                        <td><?= $demandeCtct->contact_prenom ?></td>
                        <td><?= $demandeCtct->contact_classe ?></td>
                        <td><?= $demandeCtct->contact_mail ?></td>
                        <td>+33<?= $demandeCtct->contact_tel ?></td>
                        <td><a class="table-link green-link" title="Voir la demande" href="?ad=demande&nb=<?= $demandeCtct->contact_id ?>">Voir la demande</a></td>
                        <td><a class="table-link red-link" title="Supprimer la demande" href="?ad=gestionContact&delete=<?= $demandeCtct->contact_id ?>"><img src="./images/imgAdmin/picto/trash-2.png" alt="trash"></a></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </section>
    </main>

</body>
</html>