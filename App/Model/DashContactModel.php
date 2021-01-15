<?php

    namespace App\Model;
    use Core\Database;

    /**
     * dashboard : demande de contact
     */
    class DashContactModel extends Database 
    {
        /**
         * recupere toutes les demandes de contact
         *
         * @return void
         */
        public function recupDmdContact()
        {
            $recup = $this->pdo->query("SELECT * FROM fcpe_contact ORDER BY contact_date DESC");
            $data = $recup->fetchAll(\PDO::FETCH_OBJ);
            return $data;
        }

        /**
         * supprime la demande de contact
         *
         * @return void
         */
        public function supprDmdContact()
        { 
            if(array_key_exists("delete",$_GET))
            {
                $delete = $this->pdo->prepare("DELETE FROM fcpe_contact WHERE contact_id = ?");
                $delete->execute(array(intval($_GET["delete"]))); 
                header("Location:?ad=gestionContact&done");
            }   
        }
    } 