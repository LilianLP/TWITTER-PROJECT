const tweetContainer = document.getElementById('tweet-container');

tweets.forEach(tweet => {
  const tweetElement = document.createElement('div');
  tweetElement.className = 'tweet';
  
  const authorElement = document.createElement('div');
  authorElement.className = 'tweet-author';
  authorElement.textContent = tweet.name;
  tweetElement.appendChild(authorElement);
  
  const usernameElement = document.createElement('div');
  usernameElement.className = 'tweet-username';
  usernameElement.textContent = '@' + tweet.username;
  tweetElement.appendChild(usernameElement);
  
  const timeElement = document.createElement('div');
  timeElement.className = 'tweet-time';
  timeElement.textContent = tweet.date;
  tweetElement.appendChild(timeElement);
  
  const messageElement = document.createElement('p');
  messageElement.className = 'tweet-message';
  messageElement.textContent = tweet.message;
  tweetElement.appendChild(messageElement);
  
  tweetContainer.appendChild(tweetElement);
});