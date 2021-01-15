<?php 

    namespace App\Model;
    use Core\Database;

    class DashConnexionModel extends Database {

        public function updateIdentifiantAdmin()
        {
            if(isset($_POST['valid-upAdminId']))
            {
                $lastIdentifiant = $_POST["lastIdentifiant"];
                $newIdentifiant = $_POST['newIdentifiant'];
                $validNewIdentifiant = $_POST['valid-newIdentifiant'];

                if (empty($lastIdentifiant) || empty($newIdentifiant) ||  empty($validNewIdentifiant))
                {
                    header("Location:?ad=gestionConnexion&champsVides");
                } 
                else 
                {
                    $sql = $this->pdo->prepare("SELECT * FROM fcpe_users WHERE user_statut = ? ");
                    $sql->execute([$_SESSION['Connect']]);
                    $data = $sql->fetch();
                    if ($data['user_identifiant'] == $lastIdentifiant) 
                    {
                        if($newIdentifiant == $validNewIdentifiant)
                        {
                            $updateIdentifiant = $this->pdo->prepare("UPDATE fcpe_users SET user_identifiant = ? WHERE user_statut = ? ");
                            $updateIdentifiant->execute(array(htmlspecialchars($newIdentifiant),$_SESSION['Connect']));
                            header("Location:?ad=gestionConnexion&reussiteUpdate");
                        } 
                        else {
                            header("Location:?ad=gestionConnexion&differentsIdentifiants");
                        }
                    } 
                    else {
                        header("Location:?ad=gestionConnexion&mauvaisIdentifiant");
                    } 
                }
            }
        }

        public function updatePasswordAdmin()
        {
            if(isset($_POST['valid-upAdminPs']))
            {
                $lastPassword = $_POST["lastPassword"];
                $newPassword = $_POST['newPassword'];
                $validNewPassword = $_POST['valid-newPassword'];

                if (empty($lastPassword) || empty($newPassword) ||  empty($validNewPassword))
                {
                    header("Location:?ad=gestionConnexion&champsVides");
                } 
                else 
                {
                    $sql = $this->pdo->prepare("SELECT * FROM fcpe_users WHERE user_statut = ? ");
                    $sql->execute([$_SESSION['Connect']]);
                    $data = $sql->fetch();
                    if (password_verify($lastPassword, $data['user_password'])) 
                    {
                        if($newPassword == $validNewPassword)
                        {
                            $password = password_hash($newPassword, PASSWORD_DEFAULT);
                            $updatePassword = $this->pdo->prepare("UPDATE fcpe_users SET user_password = ? WHERE user_statut = ? ");
                            $updatePassword->execute(array($password,$_SESSION['Connect']));
                            header("Location:?ad=gestionConnexion&reussiteUpdate");
                        } 
                        else {
                            header("Location:?ad=gestionConnexion&differentsPassword");
                        }
                    } 
                    else {
                        header("Location:?ad=gestionConnexion&mauvaisPassword");
                    } 
                }
            }
        }

        public function updateIdentifiantParent()
        {
            if(isset($_POST['valid-upParentId']))
            {
                $lastIdentifiant = $_POST["lastIdentifiant"];
                $newIdentifiant = $_POST['newIdentifiant'];
                $validNewIdentifiant = $_POST['valid-newIdentifiant'];

                if (empty($lastIdentifiant) || empty($newIdentifiant) ||  empty($validNewIdentifiant))
                {
                    header("Location:?ad=gestionConnexion&act=paramParent&champsVides");
                } 
                else 
                {
                    $sql = $this->pdo->prepare("SELECT * FROM fcpe_users WHERE user_statut = ? ");
                    $sql->execute(["MEMBRE"]);
                    $data = $sql->fetch();
                    if ($data['user_identifiant'] == $lastIdentifiant) 
                    {
                        if($newIdentifiant == $validNewIdentifiant)
                        {
                            $updateIdentifiant = $this->pdo->prepare("UPDATE fcpe_users SET user_identifiant = ? WHERE user_statut = ? ");
                            $updateIdentifiant->execute(array(htmlspecialchars($newIdentifiant), "MEMBRE"));
                            header("Location:?ad=gestionConnexion&act=paramParent&reussiteUpdate");
                        } 
                        else {
                            header("Location:?ad=gestionConnexion&act=paramParent&differentsIdentifiants");
                        }
                    } 
                    else {
                        header("Location:?ad=gestionConnexion&act=paramParent&mauvaisIdentifiant");
                    } 
                }
            }
        }

        public function updatePasswordParent()
        {
            if(isset($_POST['valid-upParentPs']))
            {
                $lastPassword = $_POST["lastPassword"];
                $newPassword = $_POST['newPassword'];
                $validNewPassword = $_POST['valid-newPassword'];

                if (empty($lastPassword) || empty($newPassword) ||  empty($validNewPassword))
                {
                    header("Location:?ad=gestionConnexion&act=paramParent&champsVides");
                } 
                else 
                {
                    $sql = $this->pdo->prepare("SELECT * FROM fcpe_users WHERE user_statut = ? ");
                    $sql->execute(["MEMBRE"]);
                    $data = $sql->fetch();
                    if (password_verify($lastPassword, $data['user_password'])) 
                    {
                        if($newPassword == $validNewPassword)
                        {
                            $password = password_hash($newPassword, PASSWORD_DEFAULT);
                            $updatePassword = $this->pdo->prepare("UPDATE fcpe_users SET user_password = ? WHERE user_statut = ? ");
                            $updatePassword->execute(array($password,"MEMBRE"));
                            header("Location:?ad=gestionConnexion&act=paramParent&reussiteUpdate");
                        } 
                        else {
                            header("Location:?ad=gestionConnexion&act=paramParent&differentsPassword");
                        }
                    } 
                    else {
                        header("Location:?ad=gestionConnexion&act=paramParent&mauvaisPassword");
                    } 
                }
            }
        }
    }