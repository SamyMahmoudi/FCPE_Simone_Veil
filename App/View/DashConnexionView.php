<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Connexion</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
</head>
<body>
    <main class="main-dashboard">
        <?php include("inc/dashMenu.php") ?>
        <section class="page-dashboard">
            <h1>Gestion de la connexion</h1>
            <section class="containerFormConnection">
            <?php if ($_GET['act'] == "paramAdmin") {
                echo '<form method="post" class="formUpdateConnection">
                    <h2>Modification de l\'identifiant administrateur</h2>
                    <input type="text" placeholder="ancien identifiant administrateur" name="lastIdentifiant">
                    <input type="text" placeholder="nouvel identifiant administrateur" name="newIdentifiant">
                    <input type="text" placeholder="confirmer nouvel identifiant administrateur" name="valid-newIdentifiant">
                    <input type="submit" name="valid-upAdminId" value="CONFIRMER LE CHANGEMENT">
                </form>
                <form method="post" class="formUpdateConnection">
                    <h2>Modification du mot de passe administrateur</h2>
                    <input type="password" placeholder="ancien mot de passe administrateur" name="lastPassword">
                    <input type="password" placeholder="nouveau mot de passe administrateur" name="newPassword">
                    <input type="password" placeholder="confirmer nouveau mot de passe administrateur" name="valid-newPassword">
                    <input type="submit" name="valid-upAdminPs" value="CONFIRMER LE CHANGEMENT">
                </form>
                <article class="actionDashViews">            
                    <a class="backAction" href="?ad=gestionConnexion&act=paramParent" title="Modifier les paramètres des parents">Modifier les paramètres des parents</a>
                </article>';
            } else if ($_GET['act'] == "paramParent") {
                echo '<form method="post" class="formUpdateConnection">
                    <h2>Modification de l\'identifiant parent</h2>
                    <input type="text" placeholder="ancien identifiant parent" name="lastIdentifiant">
                    <input type="text" placeholder="nouvel identifiant parent" name="newIdentifiant">
                    <input type="text" placeholder="confirmer nouvel identifiant parent" name="valid-newIdentifiant">
                    <input type="submit" name="valid-upParentId" value="CONFIRMER LE CHANGEMENT">
                </form>
                <form method="post" class="formUpdateConnection">
                    <h2>Modification du mot de passe parent</h2>
                    <input type="password" placeholder="ancien mot de passe parent" name="lastPassword">
                    <input type="password" placeholder="nouveau mot de passe parent" name="newPassword">
                    <input type="password" placeholder="confirmer nouveau mot de passe parent" name="valid-newPassword">
                    <input type="submit" name="valid-upParentPs" value="CONFIRMER LE CHANGEMENT">
                </form>
                <article class="actionDashViews">            
                    <a class="backAction" href="?ad=gestionConnexion&act=paramAdmin" title="Modifier les paramètres des administrateurs">Modifier les paramètres des administrateurs</a>
                </article>';
            }
            ?>
            </section>

        </section>
    </main>
</body>
</html>