<?php 

    namespace App\Model;
    use Core\Database;

    class UnArticleModel extends Database 
    {

        public function recupArticle()
        {
            if(array_key_exists('nb',$_GET))
            {
                $query = $this->pdo->prepare("SELECT * FROM fcpe_articles WHERE article_id = ? ");
                $query->execute([$_GET['nb']]);
                $data = $query->fetchAll(\PDO::FETCH_ASSOC);
                if (empty($data)) {
                    header('Location:?ad=gestionArticle');  
                } else {
                    return $data;
                }  
            } else {
                header('Location:?ad=gestionArticle');
            }
        }


        public function ajtArticle() 
        {
            if (isset($_POST['valid-ajtArticle'])){
   
                $titreArticle = $_POST['titreArticle'];
                $descArticle = $_POST['descArticle'];
                $contenu = $_POST['contenuArticle'];

                if (empty($titreArticle) || empty($contenu) || empty($descArticle)){
            
                    header("Location:?ad=actionArticle&act=add&echec");
            
                } else {

                    $file = $_FILES['imgArticle'];
                    $fileName = $file["name"];
                    $fileTempName = $file["tmp_name"];
                    $fileError = $file["error"]; 
                    $infosfichier = pathinfo($file["name"]);
                    $extension_upload = $infosfichier['extension'];
                    $autorisee = array("jpg", "jpeg", "png");

                    if (in_array($extension_upload, $autorisee)){
                        
                        if ($fileError === 0)
                        {
                            $sql = $this->pdo->prepare("INSERT INTO fcpe_articles (article_titre, article_desc, article_img, article_contenu) VALUES (?, ?, ?, ?)");         
                            $imageFullName = uniqid("", true). "." . $extension_upload;
                            $sql->execute(array($titreArticle, $descArticle, $imageFullName, $contenu));
                            $dossierDestination = "./images/imgArticles/" . $imageFullName;
                            move_uploaded_file($fileTempName, $dossierDestination);
                            header("Location:?ad=gestionArticle");            
                                    
                        } else { header("Location:?ad=actionArticle&act=add&echec2"); }   
                            
                    } else { header("Location:?ad=actionArticle&act=add&echec3"); } 
                }
            }
        }

        public function modifArticle() 
        {
            if (isset($_POST['valid-modifArticle'])){

                $numArticle = $_GET['nb'];
                $titreArticle = $_POST['titreArticle'];
                $descArticle = $_POST['descArticle'];
                $contenu = $_POST['contenuArticle'];
                if (empty($titreArticle) || empty($contenu) || empty($descArticle)){
                        header("Location:?ad=actionArticle&act=update&echec");
                } else {
                    $file = $_FILES['imgArticle'];
                    $fileName = $file["name"];
                    $fileTempName = $file["tmp_name"];
                    $fileError = $file["error"]; 
                    $infosfichier = pathinfo($file["name"]);
                    $extension_upload = $infosfichier['extension'];
                    $autorisee = array("jpg", "jpeg", "png");
                    if (in_array($extension_upload, $autorisee)){
                        if ($fileError === 0)
                        {
                            $sql = $this->pdo->prepare("UPDATE fcpe_articles SET article_titre = ?, article_desc = ?, article_img = ?, article_contenu = ? WHERE article_id = ?");         
                            $imageFullName = uniqid("", true). "." . $extension_upload;
                            $sql->execute(array($titreArticle, $descArticle, $imageFullName, $contenu, $numArticle));
                            $dossierDestination = "./images/imgArticles/" . $imageFullName;
                            move_uploaded_file($fileTempName, $dossierDestination);
                            header("Location:?ad=gestionArticle");   

                        } else { header("Location:?ad=actionArticle&act=update&echec"); }   
                                
                    } else { header("Location:?ad=actionArticle&act=update&echec"); } 
                }
            }
        }
    }
