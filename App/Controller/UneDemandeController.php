<?php 

    namespace App\Controller;
    use App\Model\UneDemandeModel;

    class UneDemandeController 
    {

        public function __construct()
        {
            $this->model = new UneDemandeModel();
        }

        public function demandeRender() 
        {
            if ($_SESSION['Admin']!= true || empty($_SESSION['Connect']))
            {
                header("Location:?page=connexion");
            }
            $demandes = $this->model->recupDmd();
            require ROOT."/App/View/UneDemandeView.php";
        }

    }