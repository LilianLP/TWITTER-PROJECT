<?php
require 'connect.php';
class UserAccount
{
    private $sql;

    function __construct($sql)
    {
        $this->sql = $sql;
    }

    function getUser()
    {
        $email = $_SESSION['email'];
        $stmt = $this->sql->prepare('SELECT *
            FROM user WHERE mail = :mail');
        $stmt->bindValue(':mail', $email, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch();
        return $user;
    }
    function GetUserSearch($username)
    {
        $stmt = $this->sql->prepare('SELECT * from user WHERE username = :username OR name = :username');
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch();
        return $user;
    }
}

function GetTweetProfile($username)
{
    global $sql;
    $id = GetProfileID($username);
    $stmt = $sql->prepare('SELECT tweets.*, user.name, user.username
        FROM tweets
        JOIN user ON tweets.id_user = user.id
        WHERE user.id = :id
        ORDER BY date DESC');
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $tweets = $stmt->fetchAll();
    return $tweets;
}

function GetprofileID($username)
{
    global $sql;
    $stmt = $sql->prepare('SELECT id FROM user WHERE name = :username OR username = :username');
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    $stmt->execute();
    $id = $stmt->fetchColumn();
    return $id;
}

function GetSessionID()
{
    global $sql;
    $email = $_SESSION['email'];
    $stmt = $sql->prepare('SELECT id FROM user WHERE mail = :email');
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    $id = $stmt->fetchColumn();
    return $id;
}

function  Follow($sessionid, $profileid)
{
    global $sql;
    $stmt = $sql->prepare('INSERT INTO follow (id_follower, id_following) VALUES (:sessionid, :profileid)');
    $stmt->bindParam(':sessionid', $sessionid, PDO::PARAM_INT);
    $stmt->bindParam(':profileid', $profileid, PDO::PARAM_INT);
    $stmt->execute();
}

function Unfollow($sessionid, $profileid)
{
    global $sql;
    $stmt = $sql->prepare('DELETE FROM follow WHERE id_follower = :sessionid AND id_following = :profileid');
    $stmt->bindParam(':sessionid', $sessionid, PDO::PARAM_INT);
    $stmt->bindParam(':profileid', $profileid, PDO::PARAM_INT);
    $stmt->execute();
}

function idfollower(){
    global $sql;
    $email = $_SESSION['email'];
    $stmt = $sql->prepare('SELECT follow.id_follower FROM follow JOIN user ON user.id = follow.id_follower WHERE user.mail = :email');
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    $idfollower = $stmt->fetchColumn();
    return $idfollower;
}

function idFollowing($username){
    global $sql;
    $id = GetProfileID($username);
    $stmt = $sql->prepare('SELECT id_following FROM follow WHERE id_following = :id');
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $idfollower = $stmt->fetchColumn();
    return $idfollower;
}


