<?php 

    namespace App\Controller;
    use App\Model\UneQuestionModel;


    class UneQuestionController 
    {

        public function __construct()
        {
            $this->model = new UneQuestionModel();
        }

        public function actionfaqRender() 
        {
            if ($_SESSION['Admin']!= true || empty($_SESSION['Connect']))
            {
                header("Location:?page=connexion");
            }
            
            if(array_key_exists('nb',$_GET)) 
            {
               $qrDatas = $this->model->recupQR(); 
            }
            
            $this->model->ajtQuestion();
            $this->model->modifQuestion();
            require ROOT."/App/View/UneQuestionView.php";
        }

    }
