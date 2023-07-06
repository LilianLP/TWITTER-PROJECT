<?php

function connect_db() {
	try {
    $sql = new PDO('mysql:host=localhost;dbname=tweet_academy;charset=utf8', 'root', 'root');
		return $sql;
	} catch (Exception $e) {
		die("Une erreur s'est produite. Veuillez contacter " .
			"votre administrateur.");
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Twitter Replica</title>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            
            <section class="col-md-3 nav">
                <div class="sidebar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <ion-icon name="home-outline"></ion-icon> 
                                <span class="nav-link-text">Accueil</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <ion-icon name="mail-outline"></ion-icon> 
                                <span class="nav-link-text">Messages</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <ion-icon name="person-outline"></ion-icon> 
                                <span class="nav-link-text">Profil</span>
                            </a>
                        </li>
                    </ul>
                    <div class="sidebar-bottom">
                        <button class="btn btn-light-mode"><p class="sidebar-bottom-text">Light mode</p></button>
                        <button class="btn btn-dark-mode"><p class="sidebar-bottom-text">Dark mode</p></button>
                        <button class="btn btn-logout"><p class="sidebar-bottom-text">Se déconnecter</p></button>
                    </div>
                </div>
            </section>

            
            <section class="col-md-6 main">
                <h1  class="main-title">Accueil</h1>
                
            </section>

            
            <section class="col-md-3 search-trends">
                <div class="sidebar">
                    <form class="search-form">
                        <input type="text" class="form-control" placeholder="Rechercher...">
                        <button type="submit" class="btn btn-primary">Rechercher</button>
                    </form>
                    <div class="trends">
                        <h2>Tendances</h2>
                        <ul>
                            <li>#Tendance1</li>
                            <li>#Tendance2</li>
                            <li>#Tendance3</li>
                            <li>#Tendance4</li>
                            <li>#Tendance5</li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>