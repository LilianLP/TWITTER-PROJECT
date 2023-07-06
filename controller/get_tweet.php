<?php
    require_once '../model/tweet_model.php';

    $tweets = GetTweet();
    foreach ($tweets as $tweet) {
        echo '
        <div class="tweet">
        <div class="tweet-author">' . $tweet['name'] . '</div>
        <div class="tweet-username">@' .  $tweet['username'] . '</div>
        <div class="tweet-time">' . $tweet['date'] . '</div>
        <p class="tweet-message">' . $tweet['message'] . '</p>
        </div>';
    }
?>