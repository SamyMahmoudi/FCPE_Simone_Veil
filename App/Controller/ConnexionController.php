<?php 

    namespace App\Controller;
    use App\Model\ConnexionModel;

    class ConnexionController {

        /* Constructeur de classes */
        public function __construct(){
            $this->model = new ConnexionModel();
        }
        
        /* Force l'utilisateur à se connecter */
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

    