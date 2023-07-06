<?php 

require 'connect.php';
$sql = connect_db();
session_start();

function SendTweet (){
    global $sql;
    $id = GetID();
    $message = $_POST['message'];
    $stmt = $sql->prepare('INSERT INTO tweets (id_user, message) VALUES (:id, :message)');
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->bindValue(':message', $message);
    $stmt->execute();
}


function GetTweet (){
    global $sql;
    $id = GetID();
    $stmt = $sql->prepare('SELECT tweets.*, user.name, user.username
    FROM tweets
    JOIN user ON tweets.id_user = user.id
    JOIN follow ON follow.id_following = user.id
    WHERE follow.id_follower = :id
    UNION 
    SELECT tweets.*, user.name, user.username
    FROM tweets
    JOIN user ON tweets.id_user = user.id
    WHERE user.id = :id
    ORDER BY date DESC');
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $tweets = $stmt->fetchAll();
    return $tweets;
}


function GetID(){
    global $sql;
    $email = $_SESSION['email'];
    $stmt = $sql->prepare('SELECT id FROM user WHERE mail = :email');
    $stmt->execute(array(
        'email' => $email,
    ));
    $id = $stmt->fetchColumn();
    return $id;
}
