<?php 

    namespace App\Model;
    use Core\Database;

    /**
     * class page articles : recup articles
     */
    class AllArticleModel extends Database {

        /**
         * recup tous les articles par date les plus récentes
         *
         * @return void
         */
        public function recupArticles()
        {
            $sql = $this->pdo->query("SELECT * FROM fcpe_articles ORDER BY article_date DESC");
            $data = $sql->fetchAll(\PDO::FETCH_OBJ);
            return $data ;
        }
    }