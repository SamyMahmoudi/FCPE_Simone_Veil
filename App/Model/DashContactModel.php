<?php

    namespace App\Model;
    use Core\Database;

    class DashContactModel extends Database 
    {
        public function recupDmdContact()
        {
            $recup = $this->pdo->query("SELECT * FROM fcpe_contact");
            $data = $recup->fetchAll(\PDO::FETCH_OBJ);
            return $data;
        }

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