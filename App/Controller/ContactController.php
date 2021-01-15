<?php 

    namespace App\Controller;
    use App\Model\ContactModel;

    class ContactController {

        /* Constructeur de classes */
        public function __construct()
        {
            $this->model = new ContactModel();
        }

        /* vérifie que l'utilisateur soit bien connecté */
        public function ContactRender() 
        {
            if($_SESSION['Admin'] != true && $_SESSION['Membre'] != true)
            {
                header("Location:?page=connexion");
            }
            $this->model->addContactRequest();
            require ROOT."/App/View/ContactView.php";
        }

    }