<?php

    namespace App\Model;
    use Core\Database;

    class DashFaqModel extends Database {

        public function recupQuestion() 
        {
            $recup = $this->pdo->query("SELECT * FROM fcpe_qr ORDER BY qr_id DESC");
            $data = $recup->fetchAll(\PDO::FETCH_OBJ);
            return $data;
        }

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