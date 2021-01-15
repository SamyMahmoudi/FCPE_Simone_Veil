<?php 

    namespace App\Controller;
    use App\Model\DashContactModel;

    class DashContactController 
    {
        /* Constructeur de classes */
        public function __construct() 
        {
            $this->model = new DashContactModel();
        }

        /* Vérifie si l'utilisateur est bien connecté */
        public function DashContactRender() 
        {
            if ($_SESSION['Admin']!= true || empty($_SESSION['Connect']))
            {
                header("Location:?page=connexion");
            }
            $this->model->supprDmdContact();
            $demandesCtct = $this->model->recupDmdContact();
            require ROOT."/App/View/DashContactView.php";
        }
    }