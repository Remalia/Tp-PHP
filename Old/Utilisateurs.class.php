<?php
class Utilisateurs
{
    public $login,$connected;

    public function getAuth($login, $password)
    {
        if (empty($_POST['pseudo'])) {
        } else {
            if (empty($_POST['mdp'])) {
            } else {
                try {
                    include_once('Param.inc.php');
                    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME .
                        ";charset=utf8", DB_USER, DB_PASS);
                    $login = filter_var($login, FILTER_SANITIZE_STRING);
                    $pass = filter_var($password, FILTER_SANITIZE_STRING);
                    $sql = "SELECT * FROM Users WHERE login = :login AND pass = :pass";
                    $stmt = $db->prepare($sql);
                    $stmt->bindValue("login", $login);
                    $stmt->bindValue("pass", $pass);
                    $stmt->execute();
                    if ($stmt->fetch()) {
                        $this->login = $login;
                        $this->connected=true;
                        return $this->login;
                    } else {
                        $this->login = null;
                        return $this->login;
                    }
                } catch (PDOException $e) {
                    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
                }
            }
        }
    }
    public function signIn($email,$login,$password)
    {
        if (empty($email)) {
            echo "Le champ email est vide.";
        } else {
            if (empty($login)) {
                echo "Le champ username est vide.";
            } else {
                try {
                    include_once('Old/Param.inc.php');
                    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME .
                        ";charset=utf8", DB_USER, DB_PASS);
                    $email = filter_var($email, FILTER_SANITIZE_STRING);
                    $login = filter_var($login, FILTER_SANITIZE_STRING);
                    $pass = filter_var($password, FILTER_SANITIZE_STRING);
                    $sql = "INSERT INTO Users (login, pass, mail) VALUES (:login,:pass,:email)";
                    $stmt = $db->prepare($sql);
                    $stmt->bindValue("email", $email);
                    $stmt->bindValue("login", $login);
                    $stmt->bindValue("pass", $pass);
                    return $stmt->execute();
                } catch (PDOException $e) {
                    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
                }
            }
        }
    }
}
