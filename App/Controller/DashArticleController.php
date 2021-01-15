<?php 

    namespace App\Controller;
    use App\Model\DashArticleModel;

    class DashArticleController {

        /* Constructeur de classes */
        public function __construct()
        {
            $this->model = new DashArticleModel();
        }

        /* vérifie que l'utilisateur est soit bien connecté */
        public function DashArticleRender() 
        {
            if ($_SESSION['Admin']!= true || empty($_SESSION['Connect']))
            {
                header("Location:?page=connexion");
            }
            $ArticlesDatas = $this->model->recupArticle();
            $this->model->supprArticle();
            require ROOT."/App/View/DashArticleView.php";
        }

    }