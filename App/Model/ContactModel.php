<?php 
    namespace App\Model;
    use Core\Database;

    /**
     * Page contact : envoi la demande de contact
     */
    class ContactModel extends Database {

        /**
         * envoi la demande de contact dans la bdd
         *
         * @return void
         */
        public function addContactRequest() {
            if (isset($_POST['valider-demande'])) 
            {
                $nom = htmlspecialchars($_POST['nom']);
                $prenom = htmlspecialchars($_POST['prenom']);
                $mail = htmlspecialchars($_POST['email']);
                $tel = htmlspecialchars($_POST['numTel']);
                $classe = htmlspecialchars($_POST['classe']);
                $message = htmlspecialchars($_POST['message']);
                if (empty($nom) || empty($prenom) || empty($mail) || empty($tel) || empty($classe) || empty($message) )
                {
                    header("location:?page=contact&erreur");
                }
                else 
                {   
                    $query = $this->pdo->prepare("INSERT INTO fcpe_contact (contact_nom, contact_prenom, contact_mail, contact_tel, contact_classe, contact_message) VALUES (?,?,?,?,?,?)");
                    $query->execute([$nom, $prenom, $mail, $tel, $classe, $message]);
                    header("location:?page=contact&reussite");    
                }
            }
        }
    }