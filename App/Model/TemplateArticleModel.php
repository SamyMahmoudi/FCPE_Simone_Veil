<?php 

    namespace App\Model;
    use Core\Database;

    class TemplateArticleModel extends Database 
    {
        public function recupArticle()
        {
            if(array_key_exists('nb',$_GET))
            {
                $query = $this->pdo->prepare("SELECT * FROM fcpe_articles WHERE article_id = ? ");
                $query->execute([$_GET['nb']]);
                $data = $query->fetchAll(\PDO::FETCH_OBJ);
                if (empty($data)) {
                    header('Location:?page=accueil');  
                } else {
                    return $data;
                }  
            } else {
                header('Location:?page=accueil');
            }
        }

        public function AllArticles()
        {
            $query =$this->pdo->query("SELECT article_id, article_titre FROM fcpe_articles");
            $data = $query->fetchAll(\PDO::FETCH_OBJ);
            return $data;
        }
    }