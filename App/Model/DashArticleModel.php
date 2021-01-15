<?php 

    namespace App\Model;
    use Core\Database;

    class DashArticleModel extends Database {
        
        public function recupArticle() 
        {
            $recup = $this->pdo->query("SELECT * FROM fcpe_articles ORDER BY article_id DESC");
            $data = $recup->fetchAll(\PDO::FETCH_OBJ);
            return $data;
        }

        public function supprArticle() 
        {
            if(array_key_exists("delete",$_GET))
            {
                $delete = $this->pdo->prepare("DELETE FROM fcpe_articles WHERE article_id = ?");
                $delete->execute(array(intval($_GET["delete"]))); 
                header("Location:?ad=gestionArticle&done");
            }   
        }

    }