<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
</head>

<body>

    <?php include("inc/header.php") ?>

    <main class="mainContact">
        <section class="textContact">
            <h1>CONTACTEZ-NOUS</h1>
            <p>Contactez nous pour toutes questions, d'ordre privées ou complexe.</p>
            <p>Nous vous recontacterons par mail ou sur WhatsApp dès que possible.</p>
        </section>
        <section class="sectionContactForm">
            <form id="formContact" method="POST">
                <section class="identiteContact">
                    <label for="">Identité : </label>
                    <div class="name">
                        <input type="text" placeholder="Nom" name="nom" required>
                        <input type="text" placeholder="Prénom" name="prenom" required>
                    </div>
                </section>
                <section class="infosContact">
                    <label for="">Adresse Mail : </label>
                    <div>
                        <input type="email" name="email" placeholder="Adresse Mail" required>
                    </div>
                </section>
                <section class="infosContact">
                    <label for="">Téléphone : </label>
                    <div>
                        <input type="tel" name="numTel" placeholder="Téléphone" pattern="[0-9]{10}" required>
                    </div>
                </section>
                <section class="infosContact">
                    <label for="">Classe enfant : </label>
                    <div>
                        <select name="classe">
                            <option value="">-- CHOISIR UNE CLASSE --</option>
                            <option value="Petite Section">Petite Section</option>
                            <option value="Moyenne Section">Moyenne Section</option>
                            <option value="Grande Section">Grande Section</option>
                        </select>
                    </div>
                </section>
                <section>
                    <label for="">Message : </label>
                    <div class="demandeContact">
                        <textarea placeholder="écrivez votre message ici" name="message" id="" cols="30" rows="10" required></textarea>
                    </div>
                </section>
                <section>
                    <label for=""></label>
                    <div>
                        <input type="submit" value="ENVOYER" name="valider-demande">
                    </div>
                </section>
            </form>
        </section>
    </main>

    <?php include("inc/footer.php") ?>
</body>

</html>