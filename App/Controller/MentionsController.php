<?php 

    namespace App\Controller;

    class MentionsController {

    /* Vérifie si l'utilisateur est bien connecté */
    public function MentionsRender() {

            if($_SESSION['Admin'] != true && $_SESSION['Membre'] != true)
            {
                header("Location:?page=connexion");
            }

            require ROOT."/App/View/MentionsView.php";

        }
    }