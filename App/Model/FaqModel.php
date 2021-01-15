<?php

    namespace App\Model;
    use Core\Database;

    class FaqModel extends Database {

        public function recupQuestions()
        {
            $query = $this->pdo->query("SELECT * FROM fcpe_qr ORDER BY qr_id DESC");
            $contenus = $query->fetchAll(\PDO::FETCH_OBJ);
            return $contenus;
        }
    }