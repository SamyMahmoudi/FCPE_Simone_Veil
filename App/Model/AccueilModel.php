<?php 

    namespace App\Model;
    use Core\Database;

    class AccueilModel extends Database {

        public function recentArticle()
        {
            $sql = $this->pdo->query("SELECT * FROM fcpe_articles ORDER BY article_date DESC LIMIT 1");
            $data = $sql->fetchAll(\PDO::FETCH_ASSOC);
            return $data ;
        }

        public function recupArticle()
        {
            $sql = $this->pdo->query("SELECT * FROM fcpe_articles ORDER BY article_date DESC LIMIT 4");
            $data = $sql->fetchAll(\PDO::FETCH_OBJ);
            return $data ;
        }

        public function recupFaq()
        {
            $sql = $this->pdo->query("SELECT * FROM fcpe_qr ORDER BY qr_date DESC LIMIT 2");
            $data = $sql->fetchAll(\PDO::FETCH_OBJ);
            return $data;
        }
    }