<?php 

    namespace App\Controller;
    use App\Model\AllArticleModel;

    class AllArticleController {

        /* Constructeur de classes */
        public function __construct()
        {
            $this->model = new AllArticleModel();
        }

        /* fonçtion pour avoir tous les articles */
        public function AllArticleRender()
        {
            $Articles = $this->model->recupArticles();
            require ROOT."\App\View\AllArticleView.php";
        }
    }