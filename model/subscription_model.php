<?php
require 'connect.php';
$sql = connect_db();
function addUser($name, $username, $email, $date, $password){
    global $sql;
	$stmt = $sql->prepare('INSERT INTO user (name, username, mail, birthday, password) 
		VALUES (:name, :username, :mail, :date, :password)');
	$stmt->execute(array(
		'name' => $name,
		'username' => $username,
		'mail' => $email,
		'date' => $date,
		'password' => $password,
	));
}

function getEmail(){
	global $sql;
	$stmt = $sql->prepare('SELECT mail FROM user');
	$stmt->execute();
	$email = $stmt->fetchColumn();
	return $email;
}

function getUsername(){
	global $sql;
	$stmt = $sql->prepare('SELECT username FROM user');
	$stmt->execute();
	$username = $stmt->fetchColumn();
	return $username;
}
?>

