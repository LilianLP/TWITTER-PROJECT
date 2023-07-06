<?php
require('../controller/account_controller.php');
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil Twitter Clone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">
    <link href="./style/profile.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-md-nowrap h-100">
            <nav class="col-sm-1 bg-light left-sidebar sticky-sidebar">
                <div class="navbar-brand"><i class="fab fa-twitter"></i> <span class="d-none d-md-inline">Twitter</span>
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
                        <button id="disconnect-button" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i> <span
                                class="nav-text">Log-out</span></button>
                        <script src="deconnection.js"></script>
                    </li>
                </ul>
            </nav>

            <main class="col-md-8 custom-md-85 ms-sm-5 main-content">
                <div class="profile-header">
                    <img src="<?php echo $user['banner'] ?>" alt="Bannière" class="img-fluid profile-banner">
                    <div class="profile-avatar">
                        <img src="<?php echo $user['avatar'] ?>" alt="Avatar" class="rounded-circle">
                        <h2>@
                            <?php echo $user['username'] ?>
                        </h2>
                    </div>
                </div>
                <div class="profile-bio">
                    <p>
                        <?php echo $user['bio'] ?>
                    </p>
                </div>
                <form method="POST">
                    <button type="submit" class="btn btn-primary" name="follow-button">Suivre</button>
                    <?php
                    $id = GetSessionID();
    if ($id === $user['id']) {
        echo '<button type="button" class="btn btn-primary" data-bs-toggle="modal"
        data-bs-target="#editProfileModal">Modifier le profil</button>';
    } else {
        echo '<button type="button" class="btn btn-primary" data-bs-toggle="modal"
        data-bs-target="#editProfileModal" style="display:none;">Modifier le profil</button>';
    }
?>                    
                    <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editProfileModalLabel">Modifier le profil</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Fermer"></button>
                                </div>
                                <div class="modal-body">
<<<<<<< HEAD
                                </div>  
=======
                                    <form id="edit-profile-form" method="POST" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="profile-name" class="form-label">Pseudo</label>
                                            <input type="text" class="form-control" id="profile-name" name="name"
                                                value="Nom de l'isateur">
                                        </div>
                                        <div class="mb-3">
                                            <label for="profile-bio" class="form-label">Bio</label>
                                            <textarea class="form-control" id="profile-bio" name="bio"
                                                rows="3">Bio de l'utilisateur</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="profile-banner" class="form-label">Bannière</label>
                                            <input type="file" class="form-contro   l" id="profile-banner" name="banner"
                                                accept="image/*">
                                        </div>
                                        <div class="mb-3">
                                            <label for="profile-avatar" class="form-label">Avatar</label>
                                            <input type="file" class="form-control" id="profile-avatar" name="avatar"
                                                accept="image/*">
                                        </div>
                                        <div class="tweet-container" id='tweet-container'>
                                            <script src="profile_tweets.js"></script>
                                        </div>
                                        
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Annuler</button>
                                    <button type="submit" class="btn btn-primary"
                                        form="edit-profile-form">Enregistrer</button>
                                </div>
                            </div>
                        </div>
                    </div>
>>>>>>> 41e9b034c18686f483f4ade330a1663281ce0ff9
                </form>
        </div>
        <div class="modal-body">
            <form id="edit-profile-form" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="profile-name" class="form-label">Pseudo</label>
                    <input type="text" class="form-control" id="profile-name" name="name" value="Nom de l'isateur">
                </div>
                <div class="mb-3">
                    <label for="profile-bio" class="form-label">Bio</label>
                    <textarea class="form-control" id="profile-bio" name="bio" rows="3">Bio de l'utilisateur</textarea>
                </div>
                <div class="mb-3">
                    <label for="profile-banner" class="form-label">Bannière</label>
                    <input type="file" class="form-contro   l" id="profile-banner" name="banner" accept="image/*">
                </div>
                <div class="mb-3">
                    <label for="profile-avatar" class="form-label">Avatar</label>
                    <input type="file" class="form-control" id="profile-avatar" name="avatar" accept="image/*">
                </div>
                <div class="tweet-container" id='tweet-container'>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
            <button type="submit" class="btn btn-primary" form="edit-profile-form">Enregistrer</button>
        </div>
    </div>
    </div>
    </div>
    </form>
    </main>

    <nav class="col-md-2 ms-sm-1 bg-light right-sidebar sticky-sidebar">

        <form class="d-flex" method="POST">
            <input class="form-control me-2" type="text" id="search_text" placeholder="Rechercher" aria-label="Search">
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
    <script src="https://cdn.jsdelivr