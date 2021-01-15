<?php 

    namespace App\Controller;
    use App\Model\ConnexionModel;

    class ConnexionController {

        public function __construct(){
            $this->model = new ConnexionModel();
        }
        
        public function ConnexionRender() 
        {
            if(array_key_exists("disconnect", $_GET))
            {
                $this->model->seDeconnecter();
            }
            $this->model->SeConnecter();
            require ROOT."/App/View/ConnexionView.php";
        }

    }