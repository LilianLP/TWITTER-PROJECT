<?php
require '../model/login_model.php';
session_start();
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (login($email, $password)){
        $_SESSION['email'] = $email;
        header("Location: home.php");
    } else {
        echo "<h2>Email ou mot de passe incorrect</h2>";
    }
}