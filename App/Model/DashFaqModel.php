<?php

    namespace App\Model;
    use Core\Database;

    /**
     * Dashboard FAQ : recup / supprime - FAQ
     */
    class DashFaqModel extends Database {

        /**
         * recup toutes les questions
         *
         * @return void
         */
        public function recupQuestion() 
        {
            $recup = $this->pdo->query("SELECT * FROM fcpe_qr ORDER BY qr_id DESC");
            $data = $recup->fetchAll(\PDO::FETCH_OBJ);
            return $data;
        }

        /**
         * supprime toutes les questions
         *
         * @return void
         */
        public function supprQuestion() 
        {
            if(array_key_exists("delete",$_GET))
            {
                $delete = $this->pdo->prepare("DELETE FROM fcpe_qr WHERE qr_id = ?");
                $delete->execute(array(intval($_GET["delete"]))); 
                header("Location:?ad=gestionFaq&done");
            }   
        }


    }