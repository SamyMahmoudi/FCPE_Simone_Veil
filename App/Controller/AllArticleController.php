<?php 

    namespace App\Controller;
    use App\Model\AllArticleModel;

    class AllArticleController {

        public function __construct()
        {
            $this->model = new AllArticleModel();
        }

        public function AllArticleRender()
        {
            $Articles = $this->model->recupArticles();
            require ROOT."\App\View\AllArticleView.php";
        }
    }