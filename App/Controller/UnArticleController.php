<?php 

    namespace App\Controller;
    use App\Model\UnArticleModel;

    class UnArticleController {

        public function __construct()
        {
            $this->model = new UnArticleModel();
        }

        public function UnArticleRender() {

            if ($_SESSION['Admin']!= true || empty($_SESSION['Connect']))
            {
                header("Location:?page=connexion");
            }

            if(array_key_exists('nb',$_GET)) 
            {
               $articlesDatas = $this->model->recupArticle();
            }
            
            $this->model->ajtArticle();
            $this->model->modifArticle();
            require ROOT."/App/View/UnArticleView.php";

        }
    }