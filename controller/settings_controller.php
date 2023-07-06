<?php
session_start();
require ('../model/settings_model.php');

$sql = connect_db();
$userModel = new User($sql);

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $user = $userModel->getUser($email);
}

if (isset($_POST['modifier'])) {
    header("Location: new_password.php");
}
    
if(isset($_POST['disconnect'])){
    session_unset();
    session_destroy();
    header("Location: ../view/login.php");
}

if (isset($_POST['delete'])) {
    echo '<form method="post"> 
    <h2>Voulez-vous vraiment supprimer votre compte ?</h2>
    <input type="submit" name="confirm" value="Oui">
    <input type="submit" name="confirm_no" value="Non">
    </form>';
}

if (isset($_POST['confirm']) && ($_POST['confirm'] == "Oui")) {
    $userModel->deleteAccountYes();
}

if (isset($_POST['confirm_no']) && ($_POST['confirm_no'] == "Non"))  {
    $userModel->deleteAccountNo();
}

if (isset($_POST['submit'])) {
    verifyPassword();
    changePassword();
}

if (isset($_POST['back'])) {
    header("Location: my_account.php");
}
