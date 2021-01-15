<?php 
    namespace App\Controller;
    use App\Model\DashConnexionModel;

    class DashConnexionController {

        public function __construct()
        {
            $this->model = new DashConnexionModel();
        }

        public function DashConnexionRender()
        {
            if ($_SESSION['Admin']!= true || empty($_SESSION['Connect']))
            {
                header("Location:?page=connexion");
            }
            $this->model->updateIdentifiantAdmin();
            $this->model->updatePasswordAdmin();
            $this->model->updateIdentifiantParent();
            $this->model->updatePasswordParent();
            require ROOT."/App/View/DashConnexionView.php";
        }
    }