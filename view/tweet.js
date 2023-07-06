
$('#send-tweet-form').submit(function(event) {
    event.preventDefault(); 
    var tweetMessage = $('#tweet-message').val(); 
    if (!tweetMessage.trim()) { 
        alert('Le tweet ne peut pas être vide');
        return;
    }
    $.ajax({
        url: '../controller/send_tweet.php',
        method: 'POST',
        data: $(this).serialize(),
        success: function () {
            $('#tweet-message').val(''); 
            loadTweets(); 
        },
        error: function () {
            alert('Error sending tweet');
        }
    });
});


function loadTweets() {
    $.ajax({
        url: '../controller/get_tweet.php',
        method: 'GET',
        success: function (response) {
            $('#tweet-container').html(response);
        },
        error: function () {
            alert('Error loading tweets');
        }
    });
}


loadTweets();
