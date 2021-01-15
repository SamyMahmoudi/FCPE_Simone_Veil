<?php 

    namespace App\Controller;
    use App\Model\FaqModel;

    class FaqController {

        public function __construct()
        {
            $this->model = new FaqModel();
        }
    

        public function FaqRender() 
        {
            if($_SESSION['Admin'] != true && $_SESSION['Membre'] != true)
            {
                header("Location:?page=connexion");
            }
            $contenus = $this->model->recupQuestions();
            require ROOT."/App/View/FaqView.php";
        }

    }