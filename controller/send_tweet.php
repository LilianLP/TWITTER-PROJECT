<?php
require ('../model/tweet_model.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    SendTweet();
}


?>