<?php
require '../model/subscription_model.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$date = $_POST['date'];
	$password = hash('ripemd160', $_POST['password']);
    addUser($name, $username, $email, $date, $password);
}
if (isset($_POST['submit'])) {
	

if ($_POST['username'] == getUsername()) {
	echo 'Ce nom d\'utilisateur est déjà utilisé';
}

if ($_POST['email'] == getEmail()) {
	echo 'Cet email est déjà utilisé';
}
}
?>
