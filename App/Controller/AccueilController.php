<?php 

    namespace App\Controller;
    use App\Model\AccueilModel;


    class AccueilController {

        /* Constructeur de classes */
        public function __construct() {
            $this->model = new AccueilModel();
        }

        /* Vérifie si l'utilisateur est bien connecté */
        public function AccueilRender() 
        {
            if($_SESSION['Admin'] != true && $_SESSION['Membre'] != true)
            {
                header("Location:?page=connexion");
            }

            $recentArticleDatas = $this->model->recentArticle();
            $Articles = $this->model->recupArticle();
            $questions = $this->model->recupFaq();

            require ROOT."/App/View/AccueilView.php";
        }

    }