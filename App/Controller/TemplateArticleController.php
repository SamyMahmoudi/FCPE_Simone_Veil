<?php 

    namespace App\Controller;
    use App\Model\TemplateArticleModel;

    class TemplateArticleController {

        /* Constructeur de classes */
        public function __construct()
        {
            $this->model = new TemplateArticleModel();
        }

        /* Vérifie si l'utilisateur est bien connecté */
        public function ArticleRender()
        {
            if($_SESSION['Admin'] != true && $_SESSION['Membre'] != true)
            {
                header("Location:?page=connexion");
            }
            
            $articles = $this->model->recupArticle();
            $allArticles = $this->model->AllArticles();
            require ROOT."\App\View\TemplateArticleView.php";
        }
    }