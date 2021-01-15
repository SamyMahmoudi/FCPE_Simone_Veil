<?php 

    namespace App\Model;
    use Core\Database;

    class AllArticleModel extends Database {

        public function recupArticles()
        {
            $sql = $this->pdo->query("SELECT * FROM fcpe_articles ORDER BY article_date DESC");
            $data = $sql->fetchAll(\PDO::FETCH_OBJ);
            return $data ;
        }
    }