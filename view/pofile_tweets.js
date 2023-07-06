function loadProfileTweets() {
    $.ajax({
        url: '../controller/get_profile_tweet.php',
        method: 'GET',
        success: function (response) {
            $('#tweet-container').html(response);
        },
        error: function () {
            alert('Error loading tweets');
        }
    });
}


loadProfileTweets();