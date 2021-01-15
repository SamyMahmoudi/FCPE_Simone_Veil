<?php 

    namespace App\Controller;
    use App\Model\DashFaqModel;

    class DashFaqController {

        /* Constructeur de classes */
        public function __construct()
        {
            $this->model = new DashFaqModel();
        }
    
        /* Vérifie si l'utilisateur est bien connecté */
        public function DashFaqRender() 
        {
            if ($_SESSION['Admin']!= true || empty($_SESSION['Connect']))
            {
                header("Location:?page=connexion");
            }
            $qrDatas = $this->model->recupQuestion();
            $this->model->supprQuestion();
            require ROOT."/App/View/DashFaqView.php";
        }

    }