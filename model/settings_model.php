<?php
require 'connect.php';
class User {
    private $sql;

    function __construct($sql) {
        $this->sql = $sql;
    }

    function getUser($email) {
        $stmt = $this->sql->prepare('SELECT CONCAT(UPPER(SUBSTRING(name, 1, 1)), LOWER(SUBSTRING(name, 2))) AS name, 
            CONCAT(UPPER(SUBSTRING(username, 1, 1)), LOWER(SUBSTRING(username, 2))) AS username, birthday, mail
            FROM user WHERE mail = :mail');   
        $stmt->bindValue(':mail', $email, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch();
        return $user;
    }

    function deleteAccountYes(){
    global $sql;
if (isset($_POST['confirm']) && ($_POST['confirm'] == "Oui")) {
    $email = $_SESSION['email'];
    $stmt = $sql->prepare("DELETE FROM user WHERE mail = :mail");
    $stmt->bindValue(':mail', $email, PDO::PARAM_STR);
    $result = $stmt->execute();

if ($result){
    echo "<h2>Compte supprimé.</h2>";
    echo "<script>setTimeout(function() { window.location.href = '../view/login.php'; }, 2000);</script>";
} else {
    echo "<h2>Erreur.</h2>";
} }
    }

    function deleteAccountNo(){
if (isset($_POST['confirm_no']) && ($_POST['confirm_no'] == "Non"))  {
    echo "<h2>Suppression annulée.</h2>";
    echo "<script>setTimeout(function() { window.location.href = 'my_account.php'; }, 2000);</script>";
  }
}

}

function changePassword() {
        $password = $_POST['password'];
        $email = $_SESSION['email'];
        $password = hash('ripemd160', $password);
        $sql = connect_db();
        $stmt = $sql->prepare('UPDATE user SET password = :password WHERE mail = :mail');
        $stmt->bindValue(':mail', $email, PDO::PARAM_STR);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);
        if (verifyPassword() == true){
            $stmt->execute();
            echo "Mot de passe modifié avec succès";
            header("Location: ../view/login.php");
        } else {
            echo "Mot de passe incorrect";
        }
    }

function verifyPassword() {
        $password = $_POST['old_password'];
        $email = $_SESSION['email'];
        $password = hash('ripemd160', $password);
        $sql = connect_db();
        $stmt = $sql->prepare('SELECT password FROM user WHERE mail = :mail');
        $stmt->bindValue(':mail', $email, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch();
        if ($row && $row['password'] !== null) {
            if (($password == $row['password'])) {
                return true;
        }
    }
}

?>
