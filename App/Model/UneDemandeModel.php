<?php 

    namespace App\Model;
    use Core\Database;

    class UneDemandeModel extends Database 
    {
        public function recupDmd()
        {
            $recup = $this->pdo->prepare("SELECT * FROM fcpe_contact WHERE contact_id = ?");
            $recup->execute([$_GET['nb']]);
            $data = $recup->fetchAll(\PDO::FETCH_OBJ);
            return $data;
        }

    }