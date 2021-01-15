<?php 

    namespace App\Model;
    use Core\Database;

    class UneQuestionModel extends Database 
    {
        public function recupQR()
        {
            if(array_key_exists('nb',$_GET))
            {
                $query = $this->pdo->prepare("SELECT * FROM fcpe_qr WHERE qr_id = ? ");
                $query->execute([$_GET['nb']]);
                $data = $query->fetchAll(\PDO::FETCH_ASSOC);
                if (empty($data)) {
                    header('Location:?ad=gestionFaq');  
                } else {
                    return $data;
                }  
            } else {
                header('Location:?ad=gestionFaq');
            }
        }

        public function ajtQuestion()
        {
            if (isset($_POST['valid_qr']))
            {
                $question = $_POST['titreQuestion'];
                $reponse = $_POST['contenuQuestion'];
                if (empty($question) || empty($reponse))
                {
                    header('location:?ad=actionFaq&act=add&champs-vides');
                }
                else
                {
                    $query = $this->pdo->prepare("INSERT INTO fcpe_qr(qr_question, qr_reponse) VALUES (?,?)");
                    $query->execute(array($question,$reponse));
                    header('location:?ad=actionFaq&act=add&reussite');
                }
            } 
        }

        public function modifQuestion()
        {
            if (isset($_POST['update_qr'])) 
            {
                if(array_key_exists('nb',$_GET))
                {
                    $query = $this->pdo->prepare("SELECT * FROM fcpe_qr WHERE qr_id = ? ");
                    $query->execute([$_GET['nb']]);
                    $data = $query->fetchAll(\PDO::FETCH_ASSOC);
                    if (empty($data)) 
                    {
                        header('Location:?ad=gestionFaq');  
                    } 
                    else 
                    {
                        $idQR = $_GET['nb'];
                        $question = $_POST['titreQuestion'];
                        $reponse = $_POST['contenuQuestion'];
                        if (empty($question) || empty($reponse))
                        {
                            header('location:?ad=actionFaq&act=update&champs-vides');
                        }
                        else {
                            $query = $this->pdo->prepare("UPDATE fcpe_qr SET qr_question = ?, qr_reponse = ? WHERE qr_id = ?");
                            $query->execute(array($question,$reponse, $idQR));
                            header('location:?ad=actionFaq&act=swho&reussite');
                        }
                    } 

                } else {
                    header('Location:?ad=gestionFaq');
                }
            }
        }

    }