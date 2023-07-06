<?php

require('../controller/settings_controller.php');
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Settings</title>
    <link rel="stylesheet" href="account.css">
</head>
<body>
    <form action="../view/profil.php">
    <input  type="submit" value="Revenir à ma page">
    </form>
<h1>Paramètre</h1>
<div class="info">
    <p>Nom d'utilisateur: <?php echo $user['name']; ?></p>
    <p>Email: <?php echo $user['mail']; ?></p>
    <form method="post">
    <input type="submit"  name='modifier' value="Modifier le mot de passe">
    <input type="submit" name="disconnect" value="Déconnexion">
    <input type="submit" name="delete" value="Supprimer mon compte">
</body>
</html>