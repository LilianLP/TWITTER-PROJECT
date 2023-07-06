<?php
require '../controller/subscription_controller.php';
?>
<html>

<head>
    <meta charset="utf-8">
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="pt-5">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center col-lg-4 offset-lg-4 pt-5">
            <div class="bg-light bg-gradient border border-3 rounded rounded-4 p-3">
                <form method="post" onsubmit="return validatePassword() && validateAge();">
                    <h1 class="text-center">Inscrivez-vous</h1>
                    <label for="name" class="form-label">Nom:</label>
                    <input class="form-control" type="text" name="name" required><br>
                    <label for="username" class="form-label">Nom d'utilisateur:</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">@</span>
                        <input class="form-control" type="text" name="username" required>
                    </div><br>
                    <label for="email" class="form-label">Email:</label>
                    <input class="form-control" type="email" name="email" size="30" required><br>
                    <label date="mail" class="form-label">Date de naissance:</label>
                    <input class="form-control" type="date" name="date" id="date" value="2002-07-22" max="2005-02-13"
                        required><br>
                    <label class="form-label">Mot de passe (8 caractères minimum):</label>
                    <input class="form-control" type="password" name="password" id="password" minlength="8"
                        required><br>
                    <label class="form-label">Confirmer le mot de passe:</label>
                    <input class="form-control" type="password" id="password_confirm" minlength="8" required><br>
                    <script src="myscripts.js"></script>
                    <span id="Message"></span>
                    <div class="text-center">
                        <input class="btn btn-primary" name='submit' type="submit" value="S'inscrire">
                        <p>Vous avez déjà un compte ? <a href='login.php'>Connectez-vous</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>