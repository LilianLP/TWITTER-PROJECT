<?php
require '../controller/login_controller.php';
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Connection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="pt-5">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center col-lg-4 offset-lg-4 pt-5">
            <div class="bg-light bg-gradient border border-3 rounded rounded-4 p-3">
                <form method='post'>
                    <h1 class="text-center">Connectez-vous</h1>
                    <label class="form-label" for="email">Email:</label>
                    <input class="form-control" type="email" name="email" size="30" required><br>
                    <label class="form-label">Mot de passe :</label>
                    <input class="form-control" type="password" name="password" id="password" required><br>
                    <div class="text-center">
                        <input class="btn btn-primary" type="submit" value="Se connecter" name="submit">
                        <p>Vous n'avez pas de compte ? <a href='subscription.php'>Inscrivez-vous</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>