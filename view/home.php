<?php
require_once '../controller/send_tweet.php';

?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Twitter Clone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">
    <link href="./style/home.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-md-nowrap h-100">
            <nav class="col-sm-1 bg-light left-sidebar sticky-sidebar">
                <div class="navbar-brand"><i class="fab fa-twitter" id='twitter-logo'></i> <span class="d-none d-md-inline">Twitter</span>
                </div>
                <ul class="nav d-flex align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost:3000/view/home.php"><i class="fas fa-home"></i> <span
                                class="nav-text">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost:3000/view/profil.php"><i class="fas fa-user"></i>
                            <span class="nav-text">Profile</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-envelope"></i> <span
                                class="nav-text">Messages</span></a>
                    </li>
                    <li class="nav-item">
                        <button id="dark-mode-button" class="btn btn-primary"><i class="fas fa-moon"></i> <span
                                class="nav-text">Dark Mode</span></button>
                    </li>
                    <li class="nav-item">
                        <button id="light-mode-button" class="btn btn-light"><i class="fas fa-sun"></i> <span
                                class="nav-text">Light Mode</span></button>
                    </li>
                    <li class="nav-item">
                        <button id="disconnect-button" class="btn btn-danger">
                            <i class="fas fa-sign-out-alt"></i> Log-out
                        </button>
                        <script src="deconnection.js"></script>
                    </li>
                </ul>
            </nav>

            <main class="col-md-8 custom-md-85  ms-sm-5 main-content">
                <h2 class="text-center">Accueil</h2>
                <form id="send-tweet-form" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <textarea class="form-control" id="tweet-message" name="message" rows="3"
                            placeholder="Quoi de neuf ?" maxlength="140"></textarea>
                        <input type="file" name="image" accept="image/*">
                    </div>
                    <button type="submit" class="btn btn-primary" id="send-tweet-btn">Tweeter</button>
                    <script src="tweet.js"></script>
                </form>
                <div class="tweet-container" id='tweet-container'>
                    <script src="tweetprofil.js"></script>
                </div>


            </main>

            <nav class="col-md-2 ms-sm-1 bg-light right-sidebar sticky-sidebar">

                <form class="d-flex" method="POST">
                    <input class="form-control me-2" type="text" id="search_text" placeholder="Rechercher"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
                </form>
                <div id="result">
                    <script src="search.js"></script>
                </div>

                <div class="trends">
                    <h3>Tendances</h3>
                    <ul>
                        <li>#Exemple1</li>
                        <li>#Exemple2</li>
                        <li>#Exemple3</li>
                        <li>#Exemple4</li>
                        <li>#Exemple5</li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const darkModeButton = document.querySelector("#dark-mode-button");
            const lightModeButton = document.querySelector("#light-mode-button");

            darkModeButton.addEventListener("click", function () {
                document.body.classList.add("dark-mode");
                document.body.classList.remove("light-mode");
            });

            lightModeButton.addEventListener("click", function () {
                document.body.classList.add("light-mode");
                document.body.classList.remove("dark-mode");
            });
        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>