<?php 

    namespace App\Model;
    use Core\Database;

    /**
     * Class page accueil : recup articles / faq, récents 
     */
    class AccueilModel extends Database {

        /**
         * recup article le plus recent
         *
         * @return void
         */
        public function recentArticle()
        {
            $sql = $this->pdo->query("SELECT * FROM fcpe_articles ORDER BY article_date DESC LIMIT 1");
            $data = $sql->fetchAll(\PDO::FETCH_ASSOC);
            return $data ;
        }

        /**
         * recup les 4 articles les plus récents
         *
         * @return void
         */
        public function recupArticle()
        {
            $sql = $this->pdo->query("SELECT * FROM fcpe_articles ORDER BY article_date DESC LIMIT 4");
            $data = $sql->fetchAll(\PDO::FETCH_OBJ);
            return $data ;
        }

        /**
         * recup les 2 faq les plus récentes
         *
         * @return void
         */
        public function recupFaq()
        {
            $sql = $this->pdo->query("SELECT * FROM fcpe_qr ORDER BY qr_date DESC LIMIT 2");
            $data = $sql->fetchAll(\PDO::FETCH_OBJ);
            return $data;
        }
    }