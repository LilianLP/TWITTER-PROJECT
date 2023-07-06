<?php
require '../controller/account_controller.php';
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Modifier le mot de passe</title>
    <link rel="stylesheet" href="password.css">
<form method="post" onsubmit="return validatePassword();">
    <label>Mot de passe actuel:</label>
    <input type="password" name="old_password" id="old_password" required><br>
    <label>Nouveau mot de passe (8 caractères minimum):</label>
    <input type="password" name="password" id="password" minlength=8 required><br>
    <label>Confirmer le nouveau mot de passe:</label>
    <input type="password" id="password_confirm" minlength=8 required><br>
    <script src="myscripts.js"></script>
    <input type="submit" name="submit" value="Modifier">
</form>