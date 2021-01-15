<?php 

    namespace App\Model;
    use Core\Database;

    /**
     * Dashboard contact : recup toutes les demandes
     */
    class UneDemandeModel extends Database 
    {
        /**
         * recup toutes les demandes
         *
         * @return void
         */
        public function recupDmd()
        {
            $recup = $this->pdo->prepare("SELECT * FROM fcpe_contact WHERE contact_id = ?");
            $recup->execute([$_GET['nb']]);
            $data = $recup->fetchAll(\PDO::FETCH_OBJ);
            return $data;
        }

    }