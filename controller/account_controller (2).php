<?php

require '../model/account_model.php';
session_start();
$sql = connect_db();
$userAccount = new UserAccount($sql);
$username = $_GET['username'];
$user = $userAccount->GetUserSearch($username);
$profileid = GetprofileID($username);
$sessionid = GetSessionID();
$followerid = idfollower();
$followingid = idfollowing($username);
if (isset($_POST['follow-button'])) {
    if ($followerid == $sessionid && $followingid == $profileid) {
        Unfollow($sessionid, $profileid);
    } else {
        Follow($sessionid, $profileid);
    }
}
if ($followerid == $sessionid && $followingid == $profileid) {
    echo '<style>
    .follow-button {
        content : "Unfollow";
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 10px 0;
        cursor: pointer;
        border-radius: 5px;
      }
    </style>';
}

$tweets = GetTweetProfile($username);
foreach ($tweets as $tweet) 
    echo '
        <div class="tweet">
        <div class="tweet-author">' . $tweet['name'] . '</div>
        <div class="tweet-username">@' . $tweet['username'] . '</div>
        <div class="tweet-time">' . $tweet['date'] . '</div>
        <p class="tweet-message">' . $tweet['message'] . '</p>
        </div>';


if (isset($_POST['settings'])) {
    header('Location: ../view/settings.php');
}
?>