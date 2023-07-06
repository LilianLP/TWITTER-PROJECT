<?php
require 'connect.php';
function login($email, $password)
{
    $password = $_POST['password'];
    $password = hash('ripemd160', $password);
    $sql = connect_db();
    $stmt = $sql->prepare('SELECT password FROM user WHERE mail = :mail');
    $stmt->bindValue(':mail', $email, PDO::PARAM_STR);
    $stmt->execute();
    $row = $stmt->fetch();
if ($row && $row['password'] !== null) {
        if (($password == $row['password'])) {
            return true;
        } else {
            return false;
        }
    }
}
?>