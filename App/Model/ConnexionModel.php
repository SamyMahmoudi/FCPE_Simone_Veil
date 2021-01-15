<?php 

    namespace App\Model;
    use Core\Database;

    class ConnexionModel extends Database {

        public function SeConnecter() 
        {
            if(isset($_POST['connexion']))
            {
                $pseudo = $_POST['identifiant'];
                $password = $_POST['password'];
                if (empty($pseudo) || empty($password))
                {
                    header("Location:?page=connexion");
                } else {
                    $check =  $this->pdo->prepare('SELECT * FROM fcpe_users WHERE user_identifiant = ?');
                    $check->execute(array($pseudo));
                    $data = $check->fetch();
                    $row = $check->rowCount();
                    if($row == 1)
                    {  
                        if(password_verify($password, $data['user_password']))
                        {   
                            if($data['user_statut'] == "ADMIN")
                            {
                                header('Location:index.php?page=accueil');
                                $_SESSION['Connect'] = $data['user_statut'];
                                $_SESSION['Admin'] = true;
                            }
                            else 
                            {
                                $_SESSION['Admin'] = false;
                                $_SESSION['Membre'] = true;
                            }
                            header('Location:index.php?page=accueil');
                            die();
                        } 
                        else 
                        {
                            header('Location:?page=connexion&login_err_password');
                        } 
                    } 
                }
            }
        }

        public function seDeconnecter()
        {
            if(array_key_exists("disconnect", $_GET)){
                if($_GET['disconnect'] == true)
                {
                    $_SESSION['Admin'] = false;
                    $_SESSION['Membre'] = false;
                    header("location:?page=connexion&disconnected");
                    session_destroy();
                }
            }
        }
    }