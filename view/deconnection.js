const disconnectButton = document.getElementById('disconnect-button');

disconnectButton.addEventListener('click', function() {
  const confirmDialog = confirm('Voulez-vous vraiment vous déconnecter ?');
  
  if (confirmDialog === true) {
    fetch('/controller/disconnect.php')
      .then(response => {
        if (response.ok) {
          console.log('Déconnexion réussie');
          window.location.href = '/view/login.php';
          
        } else {
          console.error('Erreur lors de la déconnexion');
        }
      })
      .catch(error => {
        console.error('Erreur de communication avec le serveur', error);
      });
  }
});
