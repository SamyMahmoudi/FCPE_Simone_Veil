<?php

    namespace App\Model;
    use Core\Database;

    /**
     * Page FAQ : recup les FAQ
     */
    class FaqModel extends Database {

        /**
         * recup toutes les questions / reponses
         *
         * @return void
         */
        public function recupQuestions()
        {
            $query = $this->pdo->query("SELECT * FROM fcpe_qr ORDER BY qr_id DESC");
            $contenus = $query->fetchAll(\PDO::FETCH_OBJ);
            return $contenus;
        }
    }